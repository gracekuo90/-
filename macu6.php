<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>macu-香醇系列</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/macu.css">
  <script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
    //讓送出後不跳到別的頁面
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
              <font size="5">
                MENU-麻古
              </font>
            </h2>
            <hr>
            <ul>
              <li><a href="macu0.php" title="Link">芝芝系列</a></li>
              <li><a href="macu1.php" title="Link">果粒茶系列</a></li>
              <li><a href="macu2.php" title="Link">鮮果茶飲</a></li>
              <li><a href="macu3.php" title="Link">原味茶</a></li>
              <li><a href="macu4.php" title="Link">獨家特調</a></li>
              <li><a href="macu5.php" title="Link">濃醇系列</a></li>
              <li><a href="macu6.php" title="Link">香醇系列</a></li>
            </ul>
          </nav>
        </div>
      </section>
      <section class="mainContent">
        <div class="productRow">
          <div style="text-align:center">
            <blockquote>
              <p class="producttitle">
                <u>香醇系列</u>
              </p>
            </blockquote>
          </div>
          <article class="productInfo">
            <div class="productimg"><button><a href="javascript:" onclick="hide1.style.display=hide1.style.display=='none'?'':'none'"><img src="http://www.maculife.com.tw/upload/product/images/202005151512271.JPG" alt="sample" height="125"></a></button></div>
            <span id="hide1" style="display:none">總糖量(克)/總熱量(卡):<br />L:42/296<br />瓶:56/394</span>
            <p class="price">L:$60 瓶:$90</p>
            <p class="productContent">紅茶拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal6-1"><br />
            <form method="POST">
              <div class="modal fade" id="Modal6-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="6-1">
                        <input type="hidden" name="name" value="紅茶拿鐵">
                        <b>紅茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L &nbsp; &nbsp;
                        <input type="radio" name="Size" value="瓶" /> 瓶<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="五分糖" />五分糖
                          <input type="radio" name="Sugar" value="三分糖" />三分糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
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
            <div class="productimg"><button><a href="javascript:" onclick="hide2.style.display=hide2.style.display=='none'?'':'none'"><img alt="sample" src="http://www.maculife.com.tw/upload/product/images/202106181033371.JPG" height="125"></a></button></div>
            <span id="hide2" style="display:none">總糖量(克)/總熱量(卡):<br />L:46/473<br />瓶:61/572</span>
            <p class="price">L:$60 瓶:$90</p>
            <p class="productContent">波霸紅茶拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal6-2"><br />
            <form method="POST">
              <div class="modal fade" id="Modal6-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="6-2">
                        <input type="hidden" name="name" value="波霸紅茶拿鐵">
                        <b>波霸紅茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L &nbsp; &nbsp;
                        <input type="radio" name="Size" value="瓶" /> 瓶<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="五分糖" />五分糖
                          <input type="radio" name="Sugar" value="三分糖" />三分糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
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
            <div class="productimg"><button><a href="javascript:" onclick="hide3.style.display=hide3.style.display=='none'?'':'none'"><img src="http://www.maculife.com.tw/upload/product/images/202005151606321.JPG" alt="sample" height="125"></a></button></div>
            <span id="hide3" style="display:none">總糖量(克)/總熱量(卡):<br />L:62/465<br />瓶:82/585</span>
            <p class="price">L:$70 瓶:$100</p>
            <p class="productContent">阿華田拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal6-3"><br />
            <form method="POST">
              <div class="modal fade" id="Modal6-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="6-3">
                        <input type="hidden" name="name" value="阿華田拿鐵">
                        <b>阿華田拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L &nbsp; &nbsp;
                        <input type="radio" name="Size" value="瓶" /> 瓶<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="五分糖" />五分糖
                          <input type="radio" name="Sugar" value="三分糖" />三分糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
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
            <div class="productimg"><button><a href="javascript:" onclick="hide4.style.display=hide4.style.display=='none'?'':'none'"><img alt="sample" src="http://www.maculife.com.tw/upload/product/images/202005151502551.JPG" height="125"></a></button></div>
            <span id="hide4" style="display:none">總糖量(克)/總熱量(卡):<br />L:62/377<br />瓶:87/510</span>
            <p class="price">L:$70 瓶:$100</p>
            <p class="productContent">玫瑰紅茶拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal6-4"><br />
            <form method="POST">
              <div class="modal fade" id="Modal6-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="6-4">
                        <input type="hidden" name="name" value="玫瑰紅茶拿鐵">
                        <b>玫瑰紅茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L &nbsp; &nbsp;
                        <input type="radio" name="Size" value="瓶" /> 瓶<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="五分糖" />五分糖
                          <input type="radio" name="Sugar" value="三分糖" />三分糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
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
            <div class="productimg"><button><a href="javascript:" onclick="hide5.style.display=hide5.style.display=='none'?'':'none'"><img alt="sample" src="http://www.maculife.com.tw/upload/product/images/202106171757061.JPG" height="125"></a></button></div>
            <span id="hide5" style="display:none">總糖量(克)/總熱量(卡):<br />L:49/364</span>
            <p class="price">L:$70</p>
            <p class="productContent">搖滾波波紅茶拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal6-5"><br />
            <form method="POST">
              <div class="modal fade" id="Modal6-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="6-5">
                        <input type="hidden" name="name" value="搖滾波波紅茶拿鐵">
                        <b>搖滾波波紅茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True"/> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="五分糖" />五分糖
                          <input type="radio" name="Sugar" value="三分糖" />三分糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
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
            <div class="productimg"><button><a href="javascript:" onclick="hide6.style.display=hide6.style.display=='none'?'':'none'"><img alt="sample" src="http://www.maculife.com.tw/upload/product/images/202104261554101.JPG" height="125"></a></button></div>
            <span id="hide6" style="display:none">總糖量(克)/總熱量(卡):<br />L:56/640</span>
            <p class="price">L:$90</p>
            <p class="productContent">布蕾搖滾波波紅茶拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal6-6"><br />
            <form method="POST">
              <div class="modal fade" id="Modal6-6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="6-6">
                        <input type="hidden" name="name" value="布蕾搖滾波波紅茶拿鐵">
                        <b>布蕾搖滾波波紅茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True"/> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="五分糖" />五分糖
                          <input type="radio" name="Sugar" value="三分糖" />三分糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
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
            <div class="productimg"><button><a href="javascript:" onclick="hide7.style.display=hide7.style.display=='none'?'':'none'"><img alt="sample" src="http://www.maculife.com.tw/upload/product/images/202106181031081.JPG" height="125"></a></button></div>
            <span id="hide7" style="display:none">總糖量(克)/總熱量(卡):<br />L:54/480</span>
            <p class="price">L:$75</p>
            <p class="productContent">珍芋紅茶拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal6-7"><br />
            <form method="POST">
              <div class="modal fade" id="Modal6-7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="6-7">
                        <input type="hidden" name="name" value="珍芋紅茶拿鐵">
                        <b>珍芋紅茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True"/> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="五分糖" />五分糖
                          <input type="radio" name="Sugar" value="三分糖" />三分糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
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
      <div class="footerlinks">
        <p><a href="#http://www.maculife.com.tw/images/fb.png" title="Link">FB</a></p>
        <p><a href="http://www.maculife.com.tw/images/line.png" title="Link">Line</a></p>
      </div>
    </footer>
  </div>
  <?php
    require_once("cart_macu.inc"); 
  ?>
</body>

</html>