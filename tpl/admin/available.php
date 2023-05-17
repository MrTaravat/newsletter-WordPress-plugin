<div class="wrap">
<h1>available emails</h1>
    
    <table class="widefat">
        <thead>
            <tr>
                <th>email</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($users as $user) : ?>
                <tr>
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->status; ?></td>
                </tr>
            <?php endforeach; ?>
        
        </tbody>
    </table>

</div>