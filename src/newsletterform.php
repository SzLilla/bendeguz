// TODO abs link, for header and footer link and logo image...
<form action="<?php echo htmlspecialchars("../src/action/newsletteraction.php");?>" method="post"> 
    <div class="row">
        <div class="col">
            <input type="email" class="form-control" id="email" placeholder="Iratkozz fel a hírlevelünkre!" name="email"
                required>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary">Feliratkozom!</button>
        </div>
    </div>
</form>