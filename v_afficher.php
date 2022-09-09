<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-4">
            <h3>Notes des élèves</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Élève n°</th>
                    <th scope="col">Note</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($lesNotes as $k => $v): ?>
                    <tr>
                        <th scope="row"><?php echo $k + 1; ?></th>
                        <td ><?php echo $v; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
