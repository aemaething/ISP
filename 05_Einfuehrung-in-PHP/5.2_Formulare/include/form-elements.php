    <div class="form-group">
        <label for="email">E-Mail Adresse</label>
        <input required="required" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-Mail" name="data[email]">
        <small id="emailHelp" class="form-text text-muted">Bitte geben Sie hier Ihre E-Mail Adresse ein.</small>
    </div>

    <div class="form-group">
        <label for="password">Passwort</label>
        <input required="required" type="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Passwort" name="data[password]">
        <small id="passwordHelp" class="form-text text-muted">Bitte achten Sie auf ein ausreichend komplexes Passwort.</small>
    </div>

    <div class="form-group">
        <label for="semesteCountr">Anzahl der Semester</label>
        <select class="form-control" id="semesterCount" name="data[semesterCount]">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
        </select>
        <small id="commentHelp" class="form-text text-muted">Aber nicht schummeln! &#128521;</small>
    </div>

    <div class="form-group">
        <label for="comment">Kommentar</label>
        <textarea required="required" class="form-control" id="comment" rows="3" name="data[comment]"></textarea>
        <small id="commentHelp" class="form-text text-muted">Ihre Meinung ist uns wichtig.</small>
    </div>

    <fieldset class="form-group">
        <legend>Schaffen Sie die ISP Prüfung?</legend>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="data[ispExam]" id="isp-exam-1"
                       value="In jedem Fall!!" checked>
                In jedem Fall!
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="data[ispExam]" id="isp-exam-2"
                       value="Puh, noch nicht sicher.">
                Puuuh, noch nicht sicher.
            </label>
        </div>
        <div class="form-check disabled">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="data[ispExam]" id="isp-exam-3"
                       value="Keine Chance (aber das können Sie ja gar nicht anklicken)" disabled>
                Keine Chance!
            </label>
        </div>
    </fieldset>

    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="data[topGrade]">
            Ich möchte eine 1.0
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Absenden</button>