<div id="cart">
        <div class="navinfo" id="navinfo">
            <div class="info">
                cart
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
                        <td><img src="assets/img/sholat yuuk.jpg" alt="#"> <a href="">remove</a>
                        </td>
                        <td>30$</td>
                        <td><input type="number" value="1"/></td>
                        <td>L</td>
                        <td>30$</td>
                    </tr>
                    <?php } ?>

                </table>
                <h4 style="float: right;margin-right:10px;"><span>Subtotal</span>30$</h4>
                <button>checkout</button>
            </div>
        </form>
        </div>