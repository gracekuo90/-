<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>牧場鮮奶茶</title>
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
              <p class="producttitle"><u>牧場鮮奶茶</u></p>
            </blockquote>
          </div>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide1.style.display=hide1.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/1908091153440000001.png&w=307&zc=2"></a></button></div>
            <span id="hide1" style="display:none">總熱量(卡)/總糖量(克)<br />M:171/26<br />L:236/34</span>
            <p class="price">M:$45 L:$55</p>
            <p class="productContent">伯爵紅茶拿鐵 </p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal3-1">
            <form method="POST">
              <div class="modal fade" id="Modal3-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="3-1">
                        <input type="hidden" name="Name" value="伯爵紅茶拿鐵">
                        <b>伯爵紅茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="M" checked="True" /> M &nbsp; &nbsp;
                        <input type="radio" name="Size" value="L" /> L<br />
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
            <div class="productimg"><button><a href="javascript:" onclick="hide2.style.display=hide2.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/1908091153510000001.png&w=307&zc=2"></a></button></div>
            <span id="hide2" style="display:none">總熱量(卡)/總糖量(克)<br />M:161/27<br />L:211/34</span>
            <p class="price">M:$45 L:$55</p>
            <p class="productContent">大正紅茶拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal3-2">
            <form method="POST">
              <div class="modal fade" id="Modal3-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="3-2">
                        <input type="hidden" name="Name" value="大正紅茶拿鐵">
                        <b>大正紅茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="M" checked="True" /> M &nbsp; &nbsp;
                        <input type="radio" name="Size" value="L" /> L<br />
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
            <div class="productimg"><button><a href="javascript:" onclick="hide3.style.display=hide3.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090847450000001.png&w=307&zc=2"></a></button></div>
            <span id="hide3" style="display:none">總熱量(卡)/總糖量(克)<br />L:169/25</span>
            <p class="price">M:$45 L:$55</p>
            <p class="productContent">焙香大麥拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal3-3">
            <form method="POST">
              <div class="modal fade" id="Modal3-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="3-3">
                        <input type="hidden" name="Name" value="焙香大麥拿鐵">
                        <b>焙香大麥拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="M" checked="True" /> M &nbsp; &nbsp;
                        <input type="radio" name="Size" value="L" /> L<br />
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
            <div class="productimg"><button><a href="javascript:" onclick="hide4.style.display=hide4.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090848510000001.png&w=307&zc=2"></a></button></div>
            <span id="hide4" style="display:none">總熱量(卡)/總糖量(克)<br />M:165/26<br />L:208/31</span>
            <p class="price">M:$45 L:$55</p>
            <p class="productContent">琥珀烏龍拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal3-4">
            <form method="POST">
              <div class="modal fade" id="Modal3-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="3-4">
                        <input type="hidden" name="Name" value="琥珀烏龍拿鐵">
                        <b>琥珀烏龍拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="M" checked="True" /> M &nbsp; &nbsp;
                        <input type="radio" name="Size" value="L" /> L<br />
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
            <div class="productimg"><button><a href="javascript:" onclick="hide5.style.display=hide5.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090849110000001.png&w=307&zc=2"></a></button></div>
            <span id="hide5" style="display:none">總熱量(卡)/總糖量(克)<br />M:158/25<br />L:219/33</span>
            <p class="price">M:$45 L:$55</p>
            <p class="productContent">茉香綠茶拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal3-5">
            <form method="POST">
              <div class="modal fade" id="Modal3-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="3-5">
                        <input type="hidden" name="Name" value="茉香綠茶拿鐵">
                        <b>茉香綠茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="M" checked="True" /> M &nbsp; &nbsp;
                        <input type="radio" name="Size" value="L" /> L<br />
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
            <div class="productimg"><button><a href="javascript:" onclick="hide6.style.display=hide6.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090850040000001.png&w=307&zc=2"></a></button></div>
            <span id="hide6" style="display:none">總熱量(卡)/總糖量(克)<br />M:165/25<br />L:228/33</span>
            <p class="price">M:$45 L:$55</p>
            <p class="productContent">原片青茶拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal3-6">
            <form method="POST">
              <div class="modal fade" id="Modal3-6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="3-6">
                        <input type="hidden" name="Name" value="原片青茶拿鐵">
                        <b>原片青茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="M" checked="True" /> M &nbsp; &nbsp;
                        <input type="radio" name="Size" value="L" /> L<br />
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
            <div class="productimg"><button><a href="javascript:" onclick="hide7.style.display=hide7.style.display=='none'?'':'none'"><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104090850470000001.png&w=307&zc=2"></a></button></div>
            <span id="hide7" style="display:none">總熱量(卡)/總糖量(克)<br />L:241/33</span>
            <p class="price">L:$55</p>
            <p class="productContent">醇濃紅茶鮮豆奶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal3-7">
            <form method="POST">
              <div class="modal fade" id="Modal3-7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="3-7">
                        <input type="hidden" name="Name" value="醇濃紅茶鮮豆奶">
                        <b>醇濃紅茶鮮豆奶</b>
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