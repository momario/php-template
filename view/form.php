<div id="form">
    <form method="post" id="example_form">
        <table class="example_table">
            <tr>
                <th colspan="2">FORM</th>
            </tr>
            <tr>
                <th>NAME</th>
                <td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="NAME"></td>
            </tr>
            <tr>
                <th>FIRST NAME</th>
                <td><input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="FIRSTNAME"></td>
            </tr>
            <tr>
                <th>COUNTRY</th>
                <td>
                    <select name="country">
                        <option>North Pole</option>
                        <option>South Pole</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input class="example_button" type="submit" formaction="<?php echo config::$url_base.'examples/form'; ?>" value="SENDEN"></td>
            </tr>
            <tr>
                <td colspan="2"><input id="example_ajax" class="example_button" type="submit" formaction="<?php echo config::$url_base.'examples/ajax_load'; ?>" value="SENDEN AJAX"></td>
            </tr>
            <tr>
                <th colspan="2">TABLE</th>
            </tr>
            <tr>
                <th>NAME</th>
                <td id="ajax_name"><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>FIRST NAME</th>
                <td id="ajax_firstname"><?php echo $firstname; ?></td>
            </tr>
            <tr>
                <th>COUNTRY</th>
                <td id="ajax_country"><?php echo $country; ?></td>
            </tr>
        </table>
    </form>
</div>