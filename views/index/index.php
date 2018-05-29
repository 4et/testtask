<form action="registration" method="POST"> 
    <table>
        <tr>
            <td>ФИО:</td>
            <td><input type="text" name="name" id="name" required></td>
            <td>
                <div class="error-box name"></div>
            </td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><input type="text" name="email" id="email" required></td>
            <td>
                <div class="error-box email"></div>
            </td>
        </tr>
        <tr id="area">
            <td>Выберите область:</td>
            <td><select id="area" class="my_select_box" data-placeholder="Выберите  из списка" name="area" required>
                    <option selected disabled>Выберите из списка</option>
                    <?php echo $data; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Выберите район:</td>
            <td><select id="district" class="my_select_box" data-placeholder="Выберите из списка" name="district" required>
                    <option selected disabled>Выберите из списка</option>
                    <?php echo $data; ?>
                </select></td>
        </tr>
        <tr>
        <tr>
            <td>Выберите город:</td>
            <td><select id="city" class="my_select_box" data-placeholder="Выберите из списка" name="city" required>
                    <option selected disabled>Выберите из списка</option>
                    <?php echo $data;?>
                </select></td>
        </tr>
        <tr>
            <td><input type="submit" id="submit" value="Отправить"></td>
        </tr>
    </table>
</form>