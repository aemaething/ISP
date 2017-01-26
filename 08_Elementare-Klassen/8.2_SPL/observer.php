<?php

/**
 * Class TimeEmitter
 */
class TimeEmitter implements SplSubject
{
    /** @var SplObjectStorage */
    private $observers;

    /**
     * @var DateTime
     */
    public $time;


    /**
     * TimeEmitter constructor.
     */
    public function __construct()
    {
        $this->time = new DateTime();
        $this->observers = new SplObjectStorage();
    }

    /**
     * Adds an observer
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer) : void
    {
        if (! $this->observers->contains($observer)) {
            $this->observers->attach($observer);
        }
    }

    /**
     * Removes an observer.
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer) : void
    {
        if ($this->observers->contains($observer)) {
            $this->observers->detach($observer);
        }
    }

    /**
     * Notifies all related obrservers.
     */
    public function notify() : void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Updates time and notifies observers.
     */
    public function updateTime()
    {
        $this->time = new DateTime();
        $this->notify();
    }

}

/**
 * Class Clock
 */
class Clock implements SplObserver
{
    /** @var string */
    private $type;

    /**
     * Clock constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject) : void
    {
        printf("%s clock's time: %s\n", $this->type, $subject->time->format("H:i:s"));
    }
}



$te = new TimeEmitter();

$te->attach(new Clock("c1"));
$te->attach(new Clock("c2"));
$te->attach(new Clock("c3"));

$c4 = new Clock("c4");
$te->attach($c4);
$te->detach($c4);


// repeat every 10 secs 10 times
$runCounter = 0;
while ($runCounter++ < 10) {
    $te->updateTime();
    sleep(10);
}

/*
c1 clock's time: 19:50:48
c2 clock's time: 19:50:48
c3 clock's time: 19:50:48
c1 clock's time: 19:50:58
c2 clock's time: 19:50:58
...
*/