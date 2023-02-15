<div class="admin-container my-5">
    <a class="text-decoration-none text-light" href="./session_index.php"><i class="me-2 fa-sharp fa-solid fa-circle-chevron-left fa-xl"></i>Liste sessions</a><br>
    <?php if(isset($newUserError)){?>
        <span class="text-danger"><?= $newUserError?></span>
    <?php }?>

    <form id="user-form" class="mt-5" action="" method="post">
        <div>
            <label style="color: white" for="date">Date :</label>
            <input <?php
            $date = new DateTime($session['date']);

            echo isset($session) ? 'value="' . $date->format('Y-m-d') . '"' : ''
            ?> class="form-control" type="date" name="date" id="date" required>
        </div>
        <div class="mt-2">
            <label style="color: white" for="ticket">Tickets réservés :</label>
            <input <?= isset($session) ? 'value="' . $session['ticketAmount'] . '"' : ''?> class="form-control" type="text" name="ticket" id="ticket"required>
        </div>
        <div class="mt-2">
            <label style="color: white" for="capacity">Capacité total :</label>
            <input <?= isset($session) ? 'value="' . $session['passengerCapacity'] . '"' : ''?> class="form-control" type="text" name="capacity" id="capacity"required>
        </div>

        <div class="mt-2">
            <label style="color: white" for="destination"> <?= isset($session) ? 'Destination : <span class="text-danger fw-bold">' . $session['name'] . '</span>' : 'Destination :' ?></label>
            <select class="form-select text-white" type="text" name="destination" id="destination">

                <?php
                $destinationRepo = new \App\repository\DestinationRepository();
                $destinations = $destinationRepo->findDestinationsList();
                foreach ($destinations as $destination) {?>
                    <option class="text-dark"
                        <?= $session['name'] === $destination['name'] ? 'selected' : '' ?>>
                        <?= $destination['name']?>
                    </option>
                <?php }?>
                </select>
        </div>
        <div>
            <input <?= isset($session) ? 'type="hidden"': 'type="submit" class="btn btn-primary success mt-4"' ?> >
        </div>
    </form>
    <?php
    if(isset($session)){?>
        <button user="<?= $session['id'] ?>" id="submit-btn" class="btn btn-primary success mt-4" data-bs-toggle="modal" data-bs-target="#myModal">Modifier</button>
    <?php }?>
</div>
</div>