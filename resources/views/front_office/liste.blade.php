<html>
    <table width="800">
        <tr>
            <th>Date</th>
            <th>Titre</th>
            <th>Resume</th>
        </tr>
        <?php foreach($info as $row){ ?>
        <tr>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['titre']; ?></td>
            <td><?php echo $row['resume']; ?></td>
        </tr>
        <?php } ?>
    </table>
</html>
