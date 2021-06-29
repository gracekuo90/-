<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>手作特調</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/milkshop.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <style>
    .modal-body {
      text-align: left;
      color: black;
    }

    .logo {
      text-decoration: none;
      color: black;
    }
  </style>
  <script>
    $('.sendToUser').on(
      'click',function() {
        var shop = $("#shop").val();
        var name = $("#Name").val();
        var size = $("input[type=radio]:checked").val();
        var sugar = $("input[type=radio]:checked").val();
        var ice = $("input[type=radio]:checked").val();
        var qty = $("#qty").val();
        if ($("input[name='selectUserRadio']").is(":checked") == false) {
          alert('Please, select a user to send.');
          return;
        }
      }
    );
  </script>
</head>

<body>
  <div id="mainWrapper">
    <header>
      <div id="logo"><a href="first.html" class="logo"><img src="https://image.flaticon.com/icons/png/128/25/25694.png" height="30"> Home</a></div>
      <div id="headerLinks"><a href="cart.php" title="Cart">Cart</a></div>
    </header>
    <section id="offer">
      <h2>關健食克</h2>
      <p>HEALTH</p>
    </section>
    <div id="content">
      <section class="sidebar">
        <div id="menubar">
          <nav class="menu"><p></p>
            <h2>
              <font size="5">MENU-迷客夏</font>
            </h2>
            <hr>
            <ul>
              <li><a href="Topping Recommendation.php" title="Topping Recommendation">嚼對推薦</a></li>
              <li><a href="Tea.php" title="Tea">愛茶的牛</a></li>
              <li><a href="Fresh Milk Tea.php" title="Fresh Milk Tea">牧場鮮奶茶</a></li>
              <li><a href="Green Light Milk.php" title="Green Light Milk">綠光牧場鮮奶</a></li>
              <li><a href="Specials.php" title="Specials">手作特調</a></li>
            </ul>
          </nav>
        </div>
      </section>

      <section class="mainContent">
        <div class="productRow">
          <div style="text-align:center">
            <blockquote>
              <p class="producttitle"><u>手作特調</u></p>
            </blockquote>
          </div>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide1.style.display=hide1.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090907080000001.png&w=307&zc=2"></a></button></div>
            <span id="hide1" style="display:none">總熱量(卡)/總糖量(克)<br />L:237/40</span>
            <p class="price">$35</p>
            <p class="productContent">冬瓜麥茶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-1">
            <form method="POST">
              <div class="modal fade" id="Modal5-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-1">
                        <input type="hidden" name="Name" value="冬瓜麥茶">
                        <b>冬瓜麥茶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide2.style.display=hide2.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090909250000001.png&w=307&zc=2"></a></button></div>
            <span id="hide2" style="display:none">總熱量(卡)/總糖量(克)<br />L:238/49</span>
            <p class="price">$40</p>
            <p class="productContent">冬瓜青茶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-2">
            <form method="POST">
              <div class="modal fade" id="Modal5-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-2">
                        <input type="hidden" name="Name" value="冬瓜青茶">
                        <b>冬瓜青茶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide3.style.display=hide3.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090913260000001.png&w=307&zc=2"></a></button></div>
            <span id="hide3" style="display:none">總熱量(卡)/總糖量(克)<br />L:289/65</span>
            <p class="price">$45</p>
            <p class="productContent">冬瓜檸檬</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-3">
            <form method="POST">
              <div class="modal fade" id="Modal5-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-3">
                        <input type="hidden" name="Name" value="冬瓜檸檬">
                        <b>冬瓜檸檬</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide4.style.display=hide4.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090914560000001.png&w=307&zc=2"></a></button></div>
            <span id="hide4" style="display:none">總熱量(卡)/總糖量(克)<br />L:199/47</span>
            <p class="price">$45</p>
            <p class="productContent">茉香洛神冰沙</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-4">
            <form method="POST">
              <div class="modal fade" id="Modal5-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-4">
                        <input type="hidden" name="Name" value="茉香洛神冰沙">
                        <b>茉香洛神冰沙</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide5.style.display=hide5.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090914180000001.png&w=307&zc=2"></a></button></div>
            <span id="hide5" style="display:none">總熱量(卡)/總糖量(克)<br />L:207/51</span>
            <p class="price">$45</p>
            <p class="productContent">冰糖洛神梅</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-5">
            <form method="POST">
              <div class="modal fade" id="Modal5-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-5">
                        <input type="hidden" name="Name" value="冰糖洛神梅">
                        <b>冰糖洛神梅</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
        </div>
        <div class="productRow">
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide6.style.display=hide6.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090915340000001.png&w=307&zc=2"></a></button></div>
            <span id="hide6" style="display:none">總熱量(卡)/總糖量(克)<br />L:175/36</span>
            <p class="price">$45</p>
            <p class="productContent">蜂農花蜜茶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-6">
            <form method="POST">
              <div class="modal fade" id="Modal5-6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-6">
                        <input type="hidden" name="Name" value="蜂農花蜜茶">
                        <b>蜂農花蜜茶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide7.style.display=hide7.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090916150000001.png&w=307&zc=2"></a></button></div>
            <span id="hide7" style="display:none">總熱量(卡)/總糖量(克)<br />L:204/40</span>
            <p class="price">$35</p>
            <p class="productContent">水漾檸紅</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-7">
            <form method="POST">
              <div class="modal fade" id="Modal5-7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-7">
                        <input type="hidden" name="Name" value="水漾檸紅">
                        <b>水漾檸紅</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide8.style.display=hide8.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090917000000001.png&w=307&zc=2"></a></button></div>
            <span id="hide8" style="display:none">總熱量(卡)/總糖量(克)<br />L:193/39</span>
            <p class="price">$35</p>
            <p class="productContent">水漾檸綠</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-8">
            <form method="POST">
              <div class="modal fade" id="Modal5-8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-8">
                        <input type="hidden" name="Name" value="水漾檸綠">
                        <b>水漾檸綠</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide9.style.display=hide9.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/1908091315060000001.png&w=307&zc=2"></a></button></div>
            <span id="hide9" style="display:none">總熱量(卡)/總糖量(克)<br />L:268/56</span>
            <p class="price">$55</p>
            <p class="productContent">冰萃檸檬</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-9">
            <form method="POST">
              <div class="modal fade" id="Modal5-9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-9">
                        <input type="hidden" name="Name" value="冰萃檸檬">
                        <b>冰萃檸檬</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide10.style.display=hide10.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090918220000001.png&w=307&zc=2"></a></button></div>
            <span id="hide10" style="display:none">總熱量(卡)/總糖量(克)<br />L:243/53</span>
            <p class="price">$55</p>
            <p class="productContent">冰萃柳丁</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-10">
            <form method="POST">
              <div class="modal fade" id="Modal5-10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-10">
                        <input type="hidden" name="Name" value="冰萃柳丁">
                        <b>冰萃柳丁</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
        </div>
        <div class="productRow">
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide11.style.display=hide11.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090919210000001.png&w=307&zc=2"></a></button></div>
            <span id="hide11" style="display:none">總熱量(卡)/總糖量(克)<br />L209/44</span>
            <p class="price">$60</p>
            <p class="productContent">青檸香茶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-11">
            <form method="POST">
              <div class="modal fade" id="Modal5-11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-11">
                        <input type="hidden" name="Name" value="青檸香茶">
                        <b>青檸香茶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide12.style.display=hide12.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090920230000001.png&w=307&zc=2"></a></button></div>
            <span id="hide12" style="display:none">總熱量(卡)/總糖量(克)<br />L:274/59</span>
            <p class="price">$50</p>
            <p class="productContent">香柚綠茶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-12">
            <form method="POST">
              <div class="modal fade" id="Modal5-12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-12">
                        <input type="hidden" name="Name" value="香柚綠茶">
                        <b>香柚綠茶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide13.style.display=hide13.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090921050000001.png&w=307&zc=2"></a></button></div>
            <span id="hide13" style="display:none">總熱量(卡)/總糖量(克)<br />L:276/54</span>
            <p class="price">$50</p>
            <p class="productContent">養樂多綠</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-13">
            <form method="POST">
              <div class="modal fade" id="Modal5-13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-13">
                        <input type="hidden" name="Name" value="養樂多綠">
                        <b>養樂多綠</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide14.style.display=hide14.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/1908091314530000001.png&w=307&zc=2"></a></button></div>
            <span id="hide14" style="display:none">總熱量(卡)/總糖量(克)<br />L:251/52</span>
            <p class="price">$60</p>
            <p class="productContent">柳丁綠茶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-14">
            <form method="POST">
              <div class="modal fade" id="Modal5-14" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-14">
                        <input type="hidden" name="Name" value="柳丁綠茶">
                        <b>柳丁綠茶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide15.style.display=hide15.style.display=='none'?'':'none'"><img src="images/28949151_88.png" alt="sample" height="157.41"></a></button></div>
            <span id="hide15" style="display:none">總熱量(卡)/總糖量(克)<br />L:256/52</span>
            <p class="price">$60</p>
            <p class="productContent">柳丁青茶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-15">
            <form method="POST">
              <div class="modal fade" id="Modal5-15" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-15">
                        <input type="hidden" name="Name" value="柳丁青茶">
                        <b>柳丁青茶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
        </div>
        <div class="productRow">
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide16.style.display=hide16.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090923140000001.png&w=307&zc=2"></a></button></div>
            <span id="hide16" style="display:none">總熱量(卡)/總糖量(克)<br />L:236/50</span>
            <p class="price">$60</p>
            <p class="productContent">白甘蔗青茶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal5-16">
            <form method="POST">
              <div class="modal fade" id="Modal5-16" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="5-16">
                        <input type="hidden" name="Name" value="白甘蔗青茶">
                        <b>白甘蔗青茶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
        </div>
      </section>
    </div>
    <footer>
      <div>
        <p>&nbsp;</p>
      </div>
      <div>
        <p>&nbsp;</p>
      </div>
      <div class="footerlinks">
        <p><a href="https://www.facebook.com/milkshoptea" title="FB">FB</a></p>
        <p><a href="https://www.instagram.com/milkshop_tw/" title="IG">IG</a></p>
        <p><a href="https://www.youtube.com/channel/UCd99AXGh1KrS1-zpW3NCKpg" title="YouTube">YouTube</a></p>
      </div>
    </footer>
  </div>
  <?php
    require_once("cart_milkshop.inc"); 
  ?>
</body>

</html>