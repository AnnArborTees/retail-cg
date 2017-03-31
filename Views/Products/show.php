          <div id='product-component-5fde7784ef7'></div>
          <script type="text/javascript">
            /*<![CDATA[*/

            (function () {
              var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
              if (window.ShopifyBuy) {
                if (window.ShopifyBuy.UI) {
                  ShopifyBuyInit();
                } else {
                  loadScript();
                }
              } else {
                loadScript();
              }

              function loadScript() {
                var script = document.createElement('script');
                script.async = true;
                script.src = scriptURL;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                script.onload = ShopifyBuyInit;
              }

              function ShopifyBuyInit() {
                var client = ShopifyBuy.buildClient({
                  domain: 'ann-arbor-tees.myshopify.com',
                  apiKey: '6c015f420b8eab446ce0d53a98d48939',
                  appId: '6',
                });

                ShopifyBuy.UI.onReady(client).then(function (ui) {
                  ui.createComponent('product', {
                    id: [<?php echo($GLOBALS['Product']) ?>],
                    node: document.getElementById('product-component-5fde7784ef7'),
                    moneyFormat: '%24%7B%7Bamount%7D%7D',
                    options: {
              "product": {
                "layout": "horizontal",
                "variantId": "all",
                "width": "100%",
                "contents": {
                  "img": false,
                  "imgWithCarousel": true,
                  "variantTitle": false,
                  "description": true,
                  "buttonWithQuantity": true,
                  "button": false,
                  "quantity": false
                },
                "styles": {
                  "product": {
                    "@media (min-width: 601px)": {
                      "max-width": "100%",
                      "margin-left": "0",
                      "margin-bottom": "50px"
                    }
                  },
                  "button": {
                    "background-color": "#000000",
                    "font-family": "Quantico, sans-serif",
                    ":hover": {
                      "background-color": "#000000"
                    },
                    "border-radius": "0px",
                    ":focus": {
                      "background-color": "#000000"
                    },
                    "font-weight": "normal"
                  },
                  "variantTitle": {
                    "font-family": "Quantico, sans-serif",
                    "color": "#000000",
                    "font-weight": "normal"
                  },
                  "title": {
                    "font-family": "Quantico, sans-serif",
                    "font-size": "26px",
                    "color": "#000000"
                  },
                  "description": {
                    "color": "#000000",
                    "font-family": "Quantico, sans-serif",
                    "font-weight": "normal"
                  },
                  "price": {
                    "font-family": "Quantico, sans-serif",
                    "font-size": "18px",
                    "color": "#000000",
                    "font-weight": "normal"
                  },
                  "compareAt": {
                    "font-size": "15px",
                    "font-family": "Quantico, sans-serif",
                    "font-weight": "normal",
                    "color": "#000000"
                  }
                },
                "googleFonts": [
                  "Quantico",
                  "Quantico",
                  "Quantico",
                  "Quantico",
                  "Quantico",
                  "Quantico"
                ]
              },
              "cart": {
                "contents": {
                  "button": true
                },
                "styles": {
                  "button": {
                    "background-color": "#000000",
                    "font-family": "Quantico, sans-serif",
                    ":hover": {
                      "background-color": "#000000"
                    },
                    "border-radius": "0px",
                    ":focus": {
                      "background-color": "#000000"
                    },
                    "font-weight": "normal"
                  },
                  "footer": {
                    "background-color": "#ffffff"
                  }
                },
                "googleFonts": [
                  "Quantico"
                ]
              },
              "modalProduct": {
                "contents": {
                  "img": false,
                  "imgWithCarousel": true,
                  "variantTitle": false,
                  "buttonWithQuantity": true,
                  "button": false,
                  "quantity": false
                },
                "styles": {
                  "product": {
                    "@media (min-width: 601px)": {
                      "max-width": "100%",
                      "margin-left": "0px",
                      "margin-bottom": "0px"
                    }
                  },
                  "button": {
                    "background-color": "#000000",
                    "font-family": "Quantico, sans-serif",
                    ":hover": {
                      "background-color": "#000000"
                    },
                    "border-radius": "0px",
                    ":focus": {
                      "background-color": "#000000"
                    },
                    "font-weight": "normal"
                  },
                  "variantTitle": {
                    "font-family": "Quantico, sans-serif",
                    "font-weight": "normal"
                  },
                  "title": {
                    "font-family": "Quantico, sans-serif"
                  },
                  "description": {
                    "font-family": "Quantico, sans-serif",
                    "font-weight": "normal"
                  },
                  "price": {
                    "font-family": "Quantico, sans-serif",
                    "font-weight": "normal"
                  },
                  "compareAt": {
                    "font-family": "Quantico, sans-serif",
                    "font-weight": "normal"
                  }
                },
                "googleFonts": [
                  "Quantico",
                  "Quantico",
                  "Quantico",
                  "Quantico",
                  "Quantico",
                  "Quantico"
                ]
              },
              "toggle": {
                "styles": {
                  "toggle": {
                    "font-family": "Quantico, sans-serif",
                    "background-color": "#000000",
                    ":hover": {
                      "background-color": "#000000"
                    },
                    ":focus": {
                      "background-color": "#000000"
                    },
                    "font-weight": "normal"
                  }
                },
                "googleFonts": [
                  "Quantico"
                ]
              },
              "option": {
                "styles": {
                  "label": {
                    "font-family": "Quantico, sans-serif"
                  },
                  "select": {
                    "font-family": "Quantico, sans-serif"
                  }
                },
                "googleFonts": [
                  "Quantico",
                  "Quantico"
                ]
              },
              "productSet": {
                "styles": {
                  "products": {
                    "@media (min-width: 601px)": {
                      "margin-left": "-20px"
                    }
                  }
                }
              }
            }
                  });
                });
              }
            })();
            /*]]>*/
            </script>
