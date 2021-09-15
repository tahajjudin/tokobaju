<div id="account">
        <div class="navinfo" id="navinfo">
            <div class="info">
                account
            </div>
            <div class="close">
                <a href="#"></a>
            </div>
        </div>
        <form action="" class="contentinfo">
            <div class="shoppingcart">
                <table>
                    <tr>
                        <th></th>
                        <th>price</th>
                        <th>quantity</th>
                        <th>size</th>
                        <th>total</th>
                    </tr>

                    <?php for ($i = 0; $i < 2; $i++){ ?>
                    <tr>
                        <td><img src="assets/img/sholat yuuk.jpg" alt="#">
                        </td>
                        <td>30$</td>
                        <td>3</td>
                        <td>L</td>
                        <td>30$</td>
                    </tr>
                    <?php } ?>

                </table>
                <h4 style="text-align: center;"><span>Subtotal</span>60$</h4>
                <h4>
                    BNI: 01910191018 <br> Mandiri: 0101009101101 <br> BCA:0109201910
                </h4>
                <label for="file">upload bukti transfer</label>
                <input type="file" name="file" id="file" class="inputfile" />
            </div>
        </form>
        </div>