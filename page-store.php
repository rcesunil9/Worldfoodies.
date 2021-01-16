<?php
$wpam_id = get_option('_affiliate_id');
$category_id = get_option('_category_id');

if (empty($category_id)) {
    echo '<h1>Category ID cannot be empty.</h1>';
    exit;
}

$product_id = 0;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://foremarket.net/wp-json/wc/v3/products?consumer_key=ck_c8da6de96938ea4f818305f5e80249a3ee6d4a19&consumer_secret=cs_2e6a5bebd8a5503d537ba7b346f34944177d5fa8&category='. $category_id[1] .'&per_page=20');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$results = curl_exec($ch);

curl_close($ch);

$products = json_decode($results);

// echo '<pre>';
// print_r($products);
// echo '</pre>';
?>

<?php get_header(); ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
    ._prod-img {
        width: 80%;
        height: 210px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
    }

    ._prod-content h1 {
        /* white-space: nowrap;  */
        overflow: hidden;
        /* text-overflow: ellipsis; */
        display: -webkit-box;
        -webkit-box-orient: vertical;
        font-size: 14px;
        margin-top: 10px;
        padding-left: 25px;
        padding-right: 25px;
        font-family: 'Poppins' !important;
        -webkit-line-clamp: 2;
        height: 48px;
    }

    ._prod-content a {
        font-family: 'Poppins';
    }

    ._prod-bottom-content {
        display: flex;
        border-top: 1px solid #e1e1e1;
        padding-top: 15px;
        padding-left: 25px;
        padding-right: 25px;
    }

    /* ._prod-bottom-content > div {
        width: 50%;
    } */

    ._prod-bottom-content ._prod-price {
        width: 70%;
    }

    ._prod-bottom-content ._prod-buy-button {
        width: 30%;
    }

    ._prod-buy-button a {
        font-size: .8em;
        padding: 6px 13px;
        background: var(--main-color);
        color: #fff;
        font-family: 'Poppins';
        font-weight: bold;
    }

    ._prod-price p {
        font-size: 20px;
        font-weight: bold;
        font-family: 'Poppins';
    }

    ._prod-container {
        background-color: #fff;
        box-shadow: 0 5px 23px rgba(188, 207, 219, 0.35);
        border-top: 1px solid #f8f8f8;
    }

    @media (max-width: 575px) {
        ._prod-row .col-xs-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        ._prod-img {
            height: 110px;
        }

        ._prod-bottom-content {
            display: block;
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
        }

        ._prod-bottom-content ._prod-price {
            width: 100%;
        }

        ._prod-bottom-content ._prod-buy-button {
            width: 100%;
            text-align: left !important;
        }

        ._prod-price p {
            font-size: 14px;
        }

        ._prod-content h1 {
            padding-left: 15px;
            padding-right: 15px;
            font-size: 13px;
        }
    }
</style>
<div class="container">
    <div class="_prod-row row mt-5 mb-5">
        <?php foreach( $products as $product ) { ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mt-4">
            <div class="_prod-container">
                <a href="<?php echo $product->permalink . '?wpam_id=' . $wpam_id ; ?>" target="_blank" >
                    <div class="_prod-img" style="background-image: url(<?php echo $product->images[0]->src; ?>)">

                    </div>
                </a>
                <div class="_prod-content">
                    <a href="<?php echo $product->permalink . '?wpam_id=' . $wpam_id ; ?>" target="_blank" ><h1><?php echo $product->name; ?></h1></a>
                </div>

                <div class="_prod-bottom-content">
                    <div class="_prod-price">
                        <p><?php echo $product->price_html; ?></p>
                    </div>
                    <div class="_prod-buy-button text-right">
                        <a href="<?php echo $product->permalink . '?wpam_id=' . $wpam_id ; ?>" target="_blank" class="btn">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<div class="position-fixed f-subscribe bg-light" style="padding-left:4em!important;" id="coupon-side-subscribe">
  <button type="button" id="coupon-side-pop" class="close position-absolute" aria-label="Close"><span aria-hidden="true">×</span></button>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 1280" width="60px" height="60px" class="position-absolute" style="left:0;top: 0.75em;">
    <path d="M480.7 519.9c26-26-16.3-112.3-97.6-209.1l-26.4-.5c70.3 81.6 108.8 152.9 89.5 172.3-5.4 5.4-14.8 6.3-27.3 3.3-1.9 5.7-4.8 18.2.4 32.5 28.7 11.2 50.5 12.4 61.4 1.5zm154.52-208.1c-6.6-1.23-23.72-1.45-84.26-1.47l84.26 1.47zM442.13 547.83c-.06-.03-.12-.07-.17-.1.05.03.11.07.17.1zm-5.54-3.62c.31.23.62.44.92.65-.55-.39-1.1-.79-1.64-1.2.25.19.48.37.72.55zm3.8 2.57c-.68-.43-1.35-.86-2-1.31.67.47 1.33.9 2 1.31z" fill="var(--secondary-color)">
    </path>
    <path d="M1174.95 848.21c-2.78-4.87-528.8-530.96-533.67-533.74-2.1-1.2-2.78-2.06-6.06-2.67l-84.25-1.47c-20.74 0-46.57.02-78.83.03-121.81 0-158.01.21-160.44.9-8.07 2.16-16.22 8.63-19.77 15.52-4.18 8.28-3.9-2.71-3.9 168.31 0 172.28-.28 160.65 4.18 168.45 2.78 4.87 528.87 530.89 533.74 533.67 9.12 5.22 20.46 5.22 30.35.07 5.15-2.71 316.01-313.58 318.73-318.73 5.14-9.88 5.14-21.22-.08-30.34zM515.5 539.02c-12.04 11.69-25.62 17.12-42.6 17.12-10.37 0-17.54-1.6-26.59-6.06-1.44-.7-2.82-1.46-4.18-2.26-.06-.03-.12-.07-.17-.1-.53-.31-1.06-.62-1.57-.94-.66-.41-1.33-.85-2-1.31-.29-.2-.58-.41-.86-.61l-.92-.65-.72-.54c-.11-.08-.22-.17-.33-.25-38.7-29.3-21.47-64.25-21.47-64.25s-17.23 34.95 21.47 64.25c-22.7-17.51-30.5-49.01-17.01-75.88 7.94-15.73 23.04-27.56 40.72-31.88 6.33-1.53 16.71-1.88 23.6-.7 19.49 3.13 36.26 15.73 44.97 33.62 4.45 9.05 6.06 16.22 6.06 26.59-.02 17.47-6.08 31.94-18.4 43.85z" fill="var(--main-color)">
    </path>
    <path d="M422.1 487.7c-43.4-10.4-124.3-67.9-205.4-148.9C112.3 234.3 47.1 130.1 71.1 106.1s128.2 41.2 232.7 145.7c20.3 20.3 39.2 40.7 56.2 60.4l26.4.5c-20.2-24.1-42.8-48.8-67.5-73.4C195.4 115.7 68.9 41.8 36.5 74.2 4.1 106.6 78 233 201.6 356.6c81.7 81.7 164.7 141.7 220.9 163.6-5.2-14.3-2.3-26.8-.4-32.5z" fill="var(--secondary-color)">
    </path>
  </svg>
  <form onsubmit="submitSubscribe(event, 'coupon-side-subscribe')">
    <h6>Get 10% OFF your first order.</h6>
    <div class="input-group">
      <input type="email" class="form-control form-control-sm" placeholder="Enter your email here" required>
      <div class="input-group-append">
        <button type="submit" class="btn btn-sm text-light pr-3">Get Coupon</button>
      </div>
    </div>
  </form>
</div>
<style>
  @media(max-width: 480px) {
    .f-modal form button {
      font-size: 19px !important;
      width: 90% !important;
    }
    .f-modal form input {
      width: 90% !important;
    }
    .f-modal h2 {
      font-size: 60px !important;
    }
  }
  .f-modal .modal-content {
    font-family: 'Oswald', sans-serif;
    border: 5px solid var(--main-color);
  }
  .f-modal .close {
    font-size: 35px; 
    float: right !important; 
    cursor: pointer;
  }
  .f-modal .modal-content > h2 {
    margin-top: -20px; 
    font-size: 80px; 
    font-weight: bolder;
  }
  .f-modal .modal-content > p {
    margin-top: -20px; 
    font-size: 40px !important; 
    font-weight: bolder;
  }
  .f-modal form input{
    width: 65%; 
    border: 2px solid #d2d2d2;
  }
  .f-modal .f-coupon-modal form button {
    font-size: 20px; 
    font-weight: 700; 
    width: 65%;
    background-color: var(--main-color) !important; 
    border-color: var(--main-color);
  }
  .f-modal .f-coupon-modal h3{
    padding-top: 8px; 
    padding-bottom: 5px; 
    font-size: 14px; 
    font-weight: bold; 
    cursor: pointer; 
    text-decoration: underline;
  }


</style>
<div class="f-modal-coupon f-modal modal fade" style="background-color: #00000099;">
  <div class="f-coupon-modal modal-dialog modal-dialog-centered">
    <div class="modal-content text-center px-3 py-2 ">
      <span class="close text-right" id="big-pop-coupon">×</span>
      <h2>10% OFF</h2>
      <p>SITEWIDE!</p>
      <form onsubmit="submitSubscribe(event, 'f-modal-coupon')">
        <input type="text" placeholder="Enter Your Email Here" class="p-2 rounded-0" required>
        <button type="submit" class="btn btn-primary rounded-0">GET MY 10% OFF CODE!</button>
      </form>
      <h3 id="big-pop-coupon" class="close">NO THANKS I'LL JUST KEEP SHOPPING</h3>
    </div>
  </div>
</div>
<?php get_footer(); ?>
