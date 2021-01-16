<?php include('fore-config.php'); ?>
<!-- /21863165165/SeedTag_Code_AdUnit -->
<div id='div-gpt-ad-1605607040919-0' style='width: 1px; height: 1px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1605607040919-0'); });
  </script>
</div>
<footer id="footer" class="text-light py-5">
  <div class="container px-4 px-md-0 pb-4">
    <div class="row">
      <div class="col-md-6 col-lg-3 mt-md-0 mt-3">
        <img id="footer-logo" class="mw-100" src="//static.foreshop.net/images/<?php echo $site_url; ?>/logo.png" alt="<?php echo $site_url; ?>" />
        <h5 class="ml-2 mt-4">Contact info:</h5>
        <p class="ml-3">Raul Wallenberg 4, Tel Aviv,<br/>Israel +972 37484000-3</p>
        <img src="//static.foreshop.net/images/credit-cards.png" style="width:100%; height:auto;"class="mt-2 mb-4 mw-100">
        <?php if(isset($ad_client) && isset($ad_slot) && !empty($ad_client) && !empty($ad_slot)){
          echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <ins class="adsbygoogle" 
                style="display:inline-block;width:300px;height:250px"
                data-ad-client="'.$ad_client.'"
                data-ad-slot="'.$ad_slot.'">
                </ins>
          <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
          </script> ';
        }?>
      </div>
      <div class="col-md-6 col-lg-3 mb-md-0 mb-3">
        <h5>SUBSCRIBE</h5>
        <form class="form-inline mt-2 mb-4 mr-md-0 mx-auto" onsubmit="submitSubscribe(event, 'footer-subscribe')">
          <input type="email" name="email" id="subscribe" class="form-control" placeholder="Your email..." required/>
          <button class="btn btn-success" type="submit" style=""><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </form>
        <h5>FOLLOW US</h5>
        <h4>
          <a href="//instagram.com/<?php echo $instagram; ?>" class="text-light" target="_blank"><i class="fa fa-instagram mx-1" aria-hidden="true"></i></a>
          <a href="//pinterest.com/<?php echo $pinterest; ?>" class="text-light" target="_blank"><i class="fa fa-pinterest-p mx-1" aria-hidden="true"></i></a>
          <a href="/feed/" class="text-light" target="_blank"><i class="fa fa-rss mx-1" aria-hidden="true"></i></a>
          <div id="langbar" class="mt-3"><?php echo do_shortcode('[gtranslate]'); ?></div>
        </h4>
      </div>
      <div class="col-md-6 col-lg-3 mb-md-0 mb-3">
        <h5>PAGES</h5>
        <ul class="list-unstyled ml-2">
          <li><a href="/store/" class="text-light">Store</a></li>
          <li><a href="/contact-us/" class="text-light">Contact Us</a></li>
          <li><a href="/privacy-policy/" class="text-light">Privacy Policy</a></li>
          <li><a href="/return-and-refund-policy/" class="text-light">Return and Refund Policy</a></li>
          <li><a href="/terms-and-conditions/" class="text-light">Terms and Conditions</a></li>
          <li><a href="/index.php/sitemap_index.xml" class="text-light" target="_blank">Site Map</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3 mb-md-0 mb-3">
        <h5>CATEGORIES</h5>
        <ul class="list-unstyled ml-2">
          <?php  wp_list_categories( array('title_li' => '') ); ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="text-center p-5 small" >
    &copy; 2020 <?php echo $site_url; ?> | <?php echo $analytics; ?> | This website was built by <img border="0" alt="ForeShopGroup" src="//static.foreshop.net/images/foreshop-sw.png" width="100px" height="12px"/>
  </div>
</footer>
<div class="position-fixed f-subscribe bg-light" id="side-subscribe">
  <button type="button" id="side-pop" class="close position-absolute" aria-label="Close" style="font-size:2em"><span aria-hidden="true">×</span></button>
  <svg width="60px" height="60px" class="position-absolute " viewBox="0 0 356.4 356.9" style="left: -1.1em;">
    <circle cx="183" cy="178" r="163" fill="var(--main-color)"></circle>
    <path d="M244.5 157.2c4.5 9.1 7.7 17.6 9.6 25.4 2.9 12 1.3 19.8-4.8 22.7-1.3.8-5.9.8-12.8 0-24.6-2.9-61.9 13.1-83.6 24.3-12 5.9 41.1 51.5 41.9 52.6.5 1.6-.8 3.2-4.8 5.3-18.4 9.3-27.8-1.1-38.4-14.9-13.3-16.6-24.8-22.4-34.2-17.6-.3 0-.5.3-1.3.8-.5.5-1.1.8-1.3 1.1-10.4 5.3-20.5-1.6-30.4-20.8-5.6-11.2-4.3-21.9 4-32.3 25.6-27.8 54.5-64.9 61.9-103.1-3.5-12.6-1.9-20.3 4.8-23.8 8.3-4.3 20.6.8 37.1 14.7 10.9 9.3 21.4 20 30.7 32 8.5 10.6 15.7 21.8 21.6 33.6zM105.4 259.7c-9.3-2.1-16.8-8.5-22.4-19.5-4.5-9.1-5.9-16.5-4.3-23-8 11.2-12 16.8-12.3 17.1-2.7 6.1-2.1 12.8 1.6 20.3s9.3 11.5 16.8 11.2c4.6 0 11.5-2.1 20.6-6.1zM226.9 201c-13.1-7.5-25.9-18.4-38.7-33.1-12-13.6-21.6-27.5-28.8-42.2l-5.6-15c-1.9 10.1-6.2 20.6-12.6 31.8-6.1 9.6-12 19.5-17.9 29.1-7.2 11.5-8.5 21.4-4.3 29.9 3.7 7.2 8.3 12.8 13.6 16.8 6.7 5.1 13.6 6.4 20.6 4.3.5-.3 5.1-2.4 13.9-6.4 20.8-9.6 40.8-14.7 59.8-15.2zm55.8-117.8c-8.5-14.1-19.5-24.3-32.6-30.2-13.4-6.4-28-7.5-43.8-3.7 14.1-1.1 28.5 4.3 43.5 15.8 12 9.6 22.4 21.6 31.2 36 9.3 15.5 14.7 31 16.6 47 1.9-23.7-3.2-45.4-14.9-64.9zm-16.3 14.2c-6.7-11.2-15.2-19.2-25.9-24-10.7-5.1-22.4-6.1-35-2.9 11.2-.8 23 3.5 34.7 12.5 9.6 7.7 18.1 17.4 25.1 28.8 7.5 12.3 11.7 24.8 13.1 37.4 1.6-19-2.4-36.1-12-51.8zm-14.2 13.1c-5.3-8.8-12.3-15.2-20.8-19.2s-17.9-4.8-28-2.4c9.1-.5 18.4 2.9 27.8 10.4 8 5.9 14.7 13.6 20 22.7 6.1 9.9 9.6 20 10.7 30.2 1-15.3-1.9-29.2-9.7-41.7z" fill="#fff"></path>
  </svg>
  <form onsubmit="submitSubscribe(event, 'side-subscribe')">
    <h6>Subscribe to our monthly Newsletter</h6>
    <div class="input-group">
      <input type="email" class="form-control form-control-sm" placeholder="Enter your email here" required>
      <div class="input-group-append">
        <button class="btn btn-sm pr-3 text-light" type="submit" >Subscribe</button>
      </div>
    </div>
  </form>
</div>
<div class="f-modal-newsletter f-modal modal fade show" style="background-color: #00000099;">
  <div class="f-newsletter-modal modal-dialog modal-dialog-centered">
    <div class="modal-content d-flex flex-row">
      <div class="text-center mx-3">
        <button type="button" id="big-pop-newsletter" class="close position-absolute" aria-label="Close" style="left:13px;font-size:2.5em"><span aria-hidden="true">×</span></button>
          <svg viewBox="0 0 356.4 356.9" class="w-50 pt-4">
            <circle cx="183" cy="178" r="163" fill="var(--main-color)"></circle>
            <path d="M244.5 157.2c4.5 9.1 7.7 17.6 9.6 25.4 2.9 12 1.3 19.8-4.8 22.7-1.3.8-5.9.8-12.8 0-24.6-2.9-61.9 13.1-83.6 24.3-12 5.9 41.1 51.5 41.9 52.6.5 1.6-.8 3.2-4.8 5.3-18.4 9.3-27.8-1.1-38.4-14.9-13.3-16.6-24.8-22.4-34.2-17.6-.3 0-.5.3-1.3.8-.5.5-1.1.8-1.3 1.1-10.4 5.3-20.5-1.6-30.4-20.8-5.6-11.2-4.3-21.9 4-32.3 25.6-27.8 54.5-64.9 61.9-103.1-3.5-12.6-1.9-20.3 4.8-23.8 8.3-4.3 20.6.8 37.1 14.7 10.9 9.3 21.4 20 30.7 32 8.5 10.6 15.7 21.8 21.6 33.6zM105.4 259.7c-9.3-2.1-16.8-8.5-22.4-19.5-4.5-9.1-5.9-16.5-4.3-23-8 11.2-12 16.8-12.3 17.1-2.7 6.1-2.1 12.8 1.6 20.3s9.3 11.5 16.8 11.2c4.6 0 11.5-2.1 20.6-6.1zM226.9 201c-13.1-7.5-25.9-18.4-38.7-33.1-12-13.6-21.6-27.5-28.8-42.2l-5.6-15c-1.9 10.1-6.2 20.6-12.6 31.8-6.1 9.6-12 19.5-17.9 29.1-7.2 11.5-8.5 21.4-4.3 29.9 3.7 7.2 8.3 12.8 13.6 16.8 6.7 5.1 13.6 6.4 20.6 4.3.5-.3 5.1-2.4 13.9-6.4 20.8-9.6 40.8-14.7 59.8-15.2zm55.8-117.8c-8.5-14.1-19.5-24.3-32.6-30.2-13.4-6.4-28-7.5-43.8-3.7 14.1-1.1 28.5 4.3 43.5 15.8 12 9.6 22.4 21.6 31.2 36 9.3 15.5 14.7 31 16.6 47 1.9-23.7-3.2-45.4-14.9-64.9zm-16.3 14.2c-6.7-11.2-15.2-19.2-25.9-24-10.7-5.1-22.4-6.1-35-2.9 11.2-.8 23 3.5 34.7 12.5 9.6 7.7 18.1 17.4 25.1 28.8 7.5 12.3 11.7 24.8 13.1 37.4 1.6-19-2.4-36.1-12-51.8zm-14.2 13.1c-5.3-8.8-12.3-15.2-20.8-19.2s-17.9-4.8-28-2.4c9.1-.5 18.4 2.9 27.8 10.4 8 5.9 14.7 13.6 20 22.7 6.1 9.9 9.6 20 10.7 30.2 1-15.3-1.9-29.2-9.7-41.7z" fill="#fff"></path>
          </svg>
          <h4 class="font-weight-bold pt-2">Monthly you'll receive</h4>
          <p class="mx-2 mb-4">News &amp; Announcements<br>New Work releases<br>Articles we found enlightening</p>
      </div>
      <div class="pt-4" style="background-color:var(--main-color);">
        <h2 class="pt-3 pb-2 px-4 font-weight-bold">Subscribe<br>to our Monthly Newsletter</h2>
        <form onsubmit="submitSubscribe(event, 'f-modal-newsletter')" class="px-4">
          <input type="text" placeholder="Enter Your Email Here" required="" class="form-control newsletter-input w-100 rounded-0" style="">
          <button type="submit" class="btn btn-primary bg-dark border-0 rounded-0">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/21863165165/SeedTag_Code_AdUnit', [1, 1], 'div-gpt-ad-1605607040919-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<script type="text/javascript">
window.isItMobile = window.navigator.appVersion.toLowerCase().includes('mobile');
  console.log('M '+isItMobile)
  //Optimizing performance and AD units
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap.native/3.0.0/bootstrap-native.min.js"></script>
<script async src="//www.googletagmanager.com/gtag/js?id=UA-<?php echo $analytics; ?>"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-<?php echo $analytics;?>');</script>
<script async src="//www.googletagmanager.com/gtag/js?id=UA-156162042-22"></script>
<script>window.dataLayer=window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config', 'UA-156162042-22');</script>
<script type="application/javascript">
  let popup_delay = 0;
  let mega_timer = setInterval(()=>{
      if(popup_delay < 30){
          popup_delay += 1;
          console.log(popup_delay);
          shouldShowPopup = false;
      }else{
          clearInterval(mega_timer);
          shouldShowPopup = true;
          __showPopup()
      }
  },1000);
  var shouldShowPopup = false;
  var popupIsOpen = false;
  window.addEventListener("foremediaplayer-ad-started", () => {
    shouldShowPopup = false

    if(popupIsOpen) {
      document.body.classList.remove('modal-open');
      document.querySelector('.f-modal-newsletter').classList.remove('show');
      document.querySelector('.f-modal-newsletter').style.display = 'none';
      popupIsOpen = false;
    }
  })
  window.addEventListener("foremediaplayer-ads-complete", () => {
    shouldShowPopup = true

    __showPopup()
  })

  const path = window.location.href;
  (() => {
    document.querySelector('a[href="#search"]').addEventListener('click', function(event) {
      event.preventDefault();
      document.querySelector('#search').classList.add('open');
      document.querySelector(' #search > form > input[type="search"]').focus();
    });
    document.querySelector('#search, #search button.close').addEventListener('click', function(event) {
      if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
        this.classList.remove('open');
      }
    });
  })()
  const _d = window.location.href.split("/")[2];
  let ready = (callback) => {
   if (document.readyState !== 'loading') callback();
   else document.addEventListener('DOMContentLoaded', callback);
 }
 function setCookie(name, value, time) {
  let date = new Date();
  date.setTime(date.getTime() + (time * 24 * 60 * 60 * 1000));
  let expires = time !== 0 ? "; expires=" + date.toGMTString() : "";
  document.cookie = name + "=" + value + expires + "; path=/";
}
function getCookie(name) {
  function escape(s) { return s.replace(/([.*+?\^${}()|\[\]\/\\])/g, '\\$1'); }
  let match = document.cookie.match(RegExp('(?:^|;\\s*)' + escape(name) + '=([^;]*)'));
  return match ? match[1] : null;
}
const getParams = function (url) {
  let params = {};
  let parser = document.createElement('a');
  parser.href = url;
  let query = parser.search.substring(1);
  let vars = query.split('&');
  for (let i = 0; i < vars.length; i++) {
    let pair = vars[i].split('=');
    params[pair[0]] = decodeURIComponent(pair[1]);
  }
  return params;
};
const params = getParams(path);
if(params.id && params.c){
  fetch(`https://xml.foremedia.net/conversion?id=${params.id}&c=${params.c}`).
  then(res => console.log(res))
  .catch(err => console.error(err))
};
function submitSubscribe(e, formName){
  e.preventDefault();
  let _f = e.currentTarget;
  let data = {
    'domain': _d,
    'email': _f.querySelector('input').value,
    'name': formName
  };
  fetch('//leads.foreshop.net/v1/leads', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    redirect: 'follow',
    referrerPolicy: 'no-referrer',
    body: JSON.stringify(data)
  }).then((response) => {
    return response.json();
  }).then((data) => {
    if (_f.querySelector('h6')){
       _f.querySelector('h6').style.display = 'none';
    }
    _f.querySelector('input').style.display = 'none';
    _f.querySelector('button').style.display = 'none';
    const _r = document.createElement('div');
    _r.innerText = formName === "footer-subscribe" || formName === "side-subscribe" || formName === "f-modal-newsletter" ? "You successfully subscribed to our newsletter!" : "Your Coupon will arrive soon to your email!"; 
    _r.role="alert";
    _f.appendChild(_r);
    setCookie(formName, 1, 31);
    if(formName === "side-subscribe" || formName === "coupon-side-subscribe") {
      setTimeout(()=>{_f.parentNode.style.display = 'none'}, 3000)
    } else {
      setTimeout(()=>{document.querySelector('.f-modal').style.display = 'none';
        document.body.classList.remove('modal-open');}, 3000)
    }
  });   
}
setTimeout(function () {
  let CouponSideSubscribe = document.querySelector('#coupon-side-subscribe');
  let SideSubscribe = document.querySelector('#side-subscribe');
  if (CouponSideSubscribe && !getCookie("coupon-side-subscribe") && path.indexOf("product/") === -1) {
    CouponSideSubscribe.style.display = 'block';
  }
  if (SideSubscribe && !getCookie("side-subscribe") && path.indexOf("store/") === -1 && path.indexOf("product/") === -1) {
    SideSubscribe.style.display = 'block';
  }
}, 20000);
function __showPopup() {
  popupIsOpen = true

  let popUp = document.querySelector('.f-modal-coupon') ? 'f-modal-coupon' : 'f-modal-newsletter';
  if (!getCookie(popUp)) {
    if(!window.quizName){
    document.body.classList.add('modal-open');
    document.getElementsByClassName(popUp)[0].classList.add('show');
    document.getElementsByClassName(popUp)[0].style.display = 'block';
    }
  }
}
document.querySelectorAll(".close").forEach(close => close.addEventListener("click", () =>{
    if(close.id == "big-pop-newsletter") {
      popupIsOpen = false

      document.body.classList.remove('modal-open');
      document.querySelector('.f-modal-newsletter').classList.remove('show');
      document.querySelector('.f-modal-newsletter').style.display = 'none';
      setCookie('f-modal-newsletter', 1, 0);
    } else if(close.id == "big-pop-coupon") {
      document.body.classList.remove('modal-open');
      document.querySelector('.f-modal-coupon').classList.remove('show');
      document.querySelector('.f-modal-coupon').style.display = 'none';
      setCookie('f-modal-coupon', 1, 0);
    } else if(close.id == "side-pop") {
      document.querySelector('#side-subscribe').style.display = 'none';
      setCookie('side-subscribe', 1, 0);
    } else if(close.id == "coupon-side-pop") {
      document.querySelector('#coupon-side-subscribe').style.display = 'none';
      setCookie('coupon-side-subscribe', 1, 0);
    }
}));
setTimeout(function () { 
  if(shouldShowPopup) {
    __showPopup()
  }
}, 20000);
function __onMouseOut(event) {
  if (event.clientY < 50 && event.relatedTarget == null && event.target.nodeName.toLowerCase() !== 'select') {
    if (shouldShowPopup) {
      document.removeEventListener("mouseout", __onMouseOut);
    __showPopup();
    }
  }
}
document.addEventListener("mouseout", __onMouseOut);

var throttledListener = throttle(scrollListener, 500);
window.addEventListener('scroll', throttledListener);
function throttle(func, delay) {
  var func = func.bind(func),
      last = Date.now();
      return function() {
      if (Date.now() - last > delay) {
          func();
          last = Date.now();
      }
  }
}

function scrollListener() {
      var threshold = document.body.clientHeight * 0.2;
      if (window.pageYOffset >= threshold) {
        get_post_by_ajax();
      }
}

function htmlToElement(html) {
    var template = document.createElement('template');
    html = html.trim(); // Never return a text node of whitespace as the result
    template.innerHTML = html;
    return template.content.firstChild;
}

function get_post_by_ajax(){
  if(window.location.pathname === "/") {
    if(featured_last_post!=-1){
        fetch("/wp-json/foretheme/v1/featured-posts?featured_last_post="+featured_last_post)
        .then(data=>data.json())
        .then(data=>{
            if(data.data.length<1){
                featured_last_post = -1;
                // document.querySelector('#featuredPost').innerHTML += `<h1>No More Posts</h1>`;
            }else{
                data.data.forEach((datas) => {
                    var parser = new DOMParser();
                    var htmlDoc = parser.parseFromString(datas.image, 'text/html');
                    let img = htmlDoc.getElementsByTagName('img')[0];
                    document.querySelector('#featuredPost').innerHTML += `
                    <a href="/${datas.post_name}">
                      <div class="post position-relative mb-4" style="background-image:url('${img.src}'); background-size:cover;"></div>
                    </a>
                    <p class="category"><a href="/category/${datas.category.slug}">${datas.category.name}</p> </a>
                    <a href="/${datas.post_name}" class="post-title">
                      <span>${datas.post_title}</span>
                    </a>`;
                });
                featured_last_post++;
            }
        });
    }
    if(trending_last_post!=-1){
        fetch("/wp-json/foretheme/v1/trending-posts?trending_last_post="+trending_last_post)
        .then(data=>data.json())
        .then(data=>{
            if(data.data.length<1){
                trending_last_post = -1;
            }else{
                data.data.forEach((datas) => {
                    var parser = new DOMParser();
                    var htmlDoc = parser.parseFromString(datas.image, 'text/html');
                    let img = htmlDoc.getElementsByTagName('img')[0];

                    document.querySelector('#trendingPost').innerHTML += ` <a href="/${datas.post_name}">
                      <div class="post position-relative mb-4" style="background-image:url('${img.src}'); background-size:cover;"></div>
                    </a>
                    <p class="category"><a href="/category/${datas.category.slug}">${datas.category.name}</p> </a>
                    <a href="/${datas.post_name}" class="post-title lg-font">
                      <span>${datas.post_title}</span>
                    </a>`;
                });
                trending_last_post++;
            }
        });
    }
    if(new_last_post!=-1){
        fetch("/wp-json/foretheme/v1/new-posts?new_last_post="+new_last_post)
        .then(data=>data.json())
        .then(data=>{
            if(data.data.length<1){
                new_last_post = -1;
            }else{
                data.data.forEach((datas) => {
                    var parser = new DOMParser();
                    var htmlDoc = parser.parseFromString(datas.image, 'text/html');
                    let img = htmlDoc.getElementsByTagName('img')[0];

                  document.querySelector('#newPost').innerHTML += `
                  <a href="/${datas.post_name}">
                    <div class="post position-relative mb-4" style="background-image:url('${img.src}'); background-size:cover;"></div>
                  </a>
                    <p class="category"><a href="/category/${datas.category.slug}">${datas.category.name}</p> </a>
                  <a href="/${datas.post_name}" class="post-title">
                    <span>${datas.post_title}</span>
                  </a>`;
                });
                new_last_post++;
            }
        });
    }
  }

  }


if (path.indexOf("contact-us/") === -1
    && path.indexOf("store/") === -1
    && path.indexOf("return-and-refund-policy/") === -1
    && path.indexOf("terms-and-conditions/") === -1
    && path.indexOf("privacy-policy/") === -1
    && path.indexOf("product/") === -1
    && !window.quizName) {
  document.querySelector('.f-subscribe').style.bottom = '90px';
  s = document.createElement('script');
  s.type = 'text/javascript';
  s.async;
  s.setAttribute('src', '//securepubads.g.doubleclick.net/tag/js/gpt.js');
  document.head.appendChild(s);
  let _ads_script = '';
  const _a = document.querySelector('main article .entry-content');
  let _q = [];
  if(_a){
    _ads_script = `
        googletag.defineSlot('/21863165165/<?php echo $ad_top;?>', ['fluid',[728,90],[300, 250]], 'div-gpt-ad-top')
          .setTargeting(REFRESH_KEY, REFRESH_VALUE)
          .defineSizeMapping(mappingE1)
          .addService(googletag.pubads());
        googletag.defineSlot('/21863165165/<?php echo $ad_bottom;?>', 'fluid', 'div-gpt-ad-bottom')
          .setTargeting(REFRESH_KEY, REFRESH_VALUE)
          .defineSizeMapping(mapping2)
          .addService(googletag.pubads());`;
    let _a_el = _a.getElementsByTagName('*');
    for (let i = 0, n = _a_el.length; i < n; i++) {
      if (/^h\d{1}$/gi.test(_a_el[i].nodeName)) {
        _q.push(_a_el[i]);
      }
    }
    /* Mid GPT */
    for (let i = 0; i < _q.length / 2; i++) {
      _ads_script += `googletag.defineSlot('/21863165165/<?php echo $ad_mid;?>', 'fluid', 'div-gpt-ad-mid-${i}', 'multi-size-ad')
          .setTargeting(REFRESH_KEY, REFRESH_VALUE)
          .defineSizeMapping(mapping2)
          .addService(googletag.pubads());
          `
    }
    
  }
  //Changes

    for(let i = window.isItMobile? 0 : 1 ; i < 2; i++){
        _ads_script += `googletag.defineSlot('/21863165165/<?php echo $ad_side;?>', [[300, 600], [300, 250]], 'div-gpt-ad-side${i}')
            .setTargeting(REFRESH_KEY, REFRESH_VALUE)
            .addService(googletag.pubads());
            googletag.defineSlot('/21863165165/<?php echo $ad_side2;?>', [[200,200], [250,250], [300,250], [336,280]], 'div-gpt-ad-side-${i}')
            .setTargeting(REFRESH_KEY, REFRESH_VALUE)
            .addService(googletag.pubads());`
      }

  s = document.createElement('script');
  s.innerHTML = `
    window.googletag=window.googletag||{cmd:[]};
    googletag.cmd.push(function(){
      var REFRESH_KEY = 'refresh';
      var REFRESH_VALUE = 'true';
      let mappingE1 = googletag.sizeMapping().
      addSize([900,90], [728, 90]).
      addSize([0, 0], [300, 250]).build();
      let mapping1 = googletag.sizeMapping().
      addSize([900,90], [[970, 90], [728, 90]]).
      addSize([0, 0], [300, 250]).
      build();
      let mapping2 = googletag.sizeMapping().
      addSize([800,90], ['fluid', [728,250], [728,90], [468,60], [336,280], [300,250], [250,250], [234,60], [200,200], [180,150]]).
      addSize([0, 0], ['fluid', [250,250], [300,250], [234,60], [200,200]]).
      build();
      let mapping3 = googletag.sizeMapping().
      addSize([800,90], [728, 90]).
      addSize([0, 0], [320, 100]).
      build();
      googletag.defineSlot('/21863165165/<?php echo $ad_header;?>', [[300, 250], [728, 90], [970, 90]], 'div-gpt-ad-header')
        .setTargeting(REFRESH_KEY, REFRESH_VALUE)
        .defineSizeMapping(mapping1)
        .addService(googletag.pubads());
      ${_ads_script}
      googletag.defineSlot('/21863165165/<?php echo $ad_sticky;?>', [[320, 100], [728, 90]], 'div-gpt-ad-sticky')
        .setTargeting(REFRESH_KEY, REFRESH_VALUE)
        .defineSizeMapping(mapping3)
        .addService(googletag.pubads());
      googletag.pubads().addEventListener('impressionViewable', function(event) {
        let slot = event.slot;
        if (slot.getTargeting(REFRESH_KEY).indexOf(REFRESH_VALUE) > -1) {
          setTimeout(function() {googletag.pubads().refresh([slot]);}, 45000);
        }
      });
      googletag.pubads().enableSingleRequest();
      googletag.pubads().enableLazyLoad();
      googletag.enableServices();
    });`;
  document.head.appendChild(s);
  function generateContainer(id) {
    const _ad = document.createElement('div');
    const _s = document.createElement('script');
    _ad.id = `div-gpt-ad-${id}`;
    _ad.style.textAlign = 'center';
    _ad.style.margin = 'auto';
    _s.innerHTML = `googletag.cmd.push(function(){googletag.display('div-gpt-ad-${id}'); });`;
    _ad.appendChild(_s);
    // if(id === 'top'){
    // 	console.log(_ad)
    // }
    return _ad;
  }
  ready(() => {
    const _b = document.querySelector('body');
    const _dh = document.querySelector('div#header-ads');
    const _h = document.querySelector('.single-ads');
    const _dhh = document.querySelector('div#home-header-ads');
    const _hs = document.querySelector('.home-single-ads');
    <?php if(is_front_page() || is_home() ){ ?>
    _dh.insertBefore(generateContainer('header'), _h.nextSibling);
    <?php }?>
    <?php if(!is_home() ){ ?>
      _dhh.insertBefore(generateContainer('header'), _hs.nextSibling);
      <?php }?>

      //for (let i = 0; i < _q.length / 2; i++) {
    if (_a) {
      const _p = _a.getElementsByTagName('p');
      // console.log(_a.children[0])
      //???
      _a.insertBefore(generateContainer('top'), _a.children[5]);
      //i = 1
      for (let i = 0; i < _q.length / 2; i++) {
        const _m = document.createElement('div');
        _m.style.marginTop = '30px';
        _m.style.textAlign = 'center';
        _m.appendChild(generateContainer('mid-' + i));
        _a.insertBefore(_m, _q[i * 2]);
      }
      _a.appendChild(generateContainer('bottom'));
    }
    

   //Since 0 index bing added inside the sidebar for mobile devices, this IF will decide either to skip or include 0 index into the loop
      const _s = document.querySelectorAll('#sidebar .row');
      _s.forEach((sidebar,index) => {
        if(index === 0){
          if(window.isItMobile){
            sidebar && sidebar.insertBefore(generateContainer(`side${index}`), sidebar.querySelector('div').nextSibling);
          }
        }else{
          sidebar && sidebar.insertBefore(generateContainer(`side${index}`), sidebar.querySelector('div').nextSibling);
        }
        
      });
           
      const _sb = document.querySelectorAll('.sidebar .row');
      _sb.forEach((sidebar2,index) => {
        if(index === 0){
          if(window.isItMobile){
           sidebar2 && sidebar2.insertBefore(generateContainer(`side-${index}`), sidebar2.querySelector('div').nextSibling);
          }
        }else{
         sidebar2 && sidebar2.insertBefore(generateContainer(`side-${index}`), sidebar2.querySelector('div').nextSibling);
        }
        
      });
    
        
        

    const _st = document.createElement('div');
    _st.classList.add('sticky-ad');
    _st.id = 'sticky-ad';
    _st.appendChild(generateContainer('sticky'));
    _b.appendChild(_st);
    <?php if(is_home()){?> 
      document.querySelector('.sticky-ad').style.right = "190px";
    <?php }?>
  });
}
let rt = document.createElement('script');
window.identifier = '';
rt.id = 'embed-script';
window.ritribesID = '<?php echo $ritribe; ?>';
rt.setAttribute('api', 'app.ritribes.com');
rt.setAttribute('position', 'top-right');
rt.src = '//app.ritribes.com/embed/inject/embed.js';
rt.setAttribute('data-timestamp', +new Date());
(document.head || document.body).appendChild(rt);
//Push
const applicationServerPublicKey = 'BPPH4s3CiFR7SZneJXJlnOfDqrfXLrk3HGfLHu5lcbYnl03rl5VPrHyKl6J9tGW32lOhZn6hmSi3q4n5zeXOKlQ';
let isSubscribed = false;
let swRegistration = null;
function urlB64ToUint8Array(base64String) {
  const padding = '='.repeat((4 - base64String.length % 4) % 4);
  const base64 = (base64String + padding)
  .replace(/\-/g, '+')
  .replace(/_/g, '/');

  const rawData = window.atob(base64);
  const outputArray = new Uint8Array(rawData.length);

  for (let i = 0; i < rawData.length; ++i) {
    outputArray[i] = rawData.charCodeAt(i);
  }
  return outputArray;
}
function initializeUI() {
  swRegistration.pushManager.getSubscription()
  .then(function(subscription) {
    isSubscribed = !(subscription === null);
    if (!isSubscribed) {
      subscribeUser();
    }
  });
}
function subscribeUser() {
  const applicationServerKey = urlB64ToUint8Array(applicationServerPublicKey);
  swRegistration.pushManager.subscribe({
    userVisibleOnly: true,
    applicationServerKey: applicationServerKey
  })
  .then(function(subscription) {
    sendSubscriptionToBackEnd(subscription, 'subscribe');
    isSubscribed = true;
  })
  .catch(function(err) {
    console.log('Failed to subscribe the user: ', err);
  });
}
function sendSubscriptionToBackEnd(subscription, action) {
  let data = JSON.stringify(subscription)
  data = JSON.parse(data);
  data.domain = window.location.hostname;
  data.action = action;
  data = JSON.stringify(data);
  return fetch('https://push.foreshop.net/api/v1/subscribers', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: data
  })
  .then(function(response) {
    if (!response.ok) {
      throw new Error('Bad status code from server.');
    }
    return response.json();
  })
  .then(function(responseData) {
    if (!(responseData.data && responseData.data.success)) {
      throw new Error('Bad response from server.');
    }
  });
}
function unsubscribeUser() {
  swRegistration.pushManager.getSubscription()
  .then(function(subscription) {
    if (subscription) {
      sendSubscriptionToBackEnd(subscription, 'unsubscribe');
      return subscription.unsubscribe();
    }
  })
  .catch(function(error) {
    console.log('Error unsubscribing', error);
  })
  .then(function() {
    isSubscribed = false;
  });
}
if ('serviceWorker' in navigator && 'PushManager' in window) {
  navigator.serviceWorker.register('/sw.js?v=3')
  .then(function(swReg) {
    swRegistration = swReg;
    initializeUI();
  })
  .catch(function(error) {
    console.error('Service Worker Error', error);
  });
} else {
  console.warn('Push messaging is not supported');
}

let featured = document.querySelector('#featuredPost');
  let trending = document.querySelector('#trendingPost');
  let newPost = document.querySelector('#newPost');
  let mediaSize = window.matchMedia("(max-width: 768px)");
  if(mediaSize.matches){
    featured.style.display = 'none';
    newPost.style.display = 'none';
  }
  function displayGrid(event){
    if(event.id === 'featured-header'){
      featured.style.display = 'block';
      trending.style.display = 'none';
      newPost.style.display = 'none';
    }
    if(event.id === 'trending-header'){
      trending.style.display = 'block';
      featured.style.display = 'none';
      newPost.style.display = 'none';
    }
    if(event.id === 'new-header'){
      trending.style.display = 'none';
      featured.style.display = 'none';
      newPost.style.display = 'block';
    }
    // event.preventDefault();
  }
    let header = document.querySelector(".feature-heading");
    let btns = header.getElementsByClassName("btn-heading");
    for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("btn-heading-active");
    current[0].className = current[0].className.replace(" btn-heading-active", "");
    this.className += " btn-heading-active";
    });
}

</script>
</body>
</html>
