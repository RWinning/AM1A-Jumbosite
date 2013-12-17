<form action="./index.php?content=register" method="post">
        <table>
                <tr>
                        <td>Voornaam:</td>
                </tr>
                <tr>
                        <td><input type="text" name="firstname" /></td>
                </tr>
                <tr>
                        <td>Tussenvoegsel</td>
                </tr>
                <tr>
                        <td><input type="text" name="infix" /></td>
                </tr>
                <tr>
                        <td>Achternaam</td>
                </tr>
                <tr>
                        <td><input type="text" name="surname" /></td>
                </tr>
                <tr>
                        <td>Straat + Huisnummer</td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="addres" />
                                <input type="number" min="0" max="18923" name="addressnumber"/>
                        </td>
                </tr>
                <tr>
                        <td>Stad: </td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="city" />
                        </td>
                </tr>
                <tr>
                        <td>Postcode: </td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="zipcode" />
                        </td>
                </tr>
                    <tr>
                        <td>Land: </td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="country" />
                        </td>
                </tr>
                <tr>
                        <td>Email</td>
                </tr>
                <tr>                                
                        <td>
                                <input type='email' name='email' />
                        </td>
                </tr>   
                  <tr>
                        <td>Telefoon: </td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="telphonenumber" />
                        </td>
                </tr>
                  <tr>
                        <td>Mobiel-nummer: </td>
                </tr>
                <tr>
                        <td>
                                <input type="text" name="mobilephonenumber" />
                        </td>
                </tr>             
                <tr>
                        <td><input type="submit" name="submit" value="verstuur" /></td>
                </tr>
        </table>
</form>                
	