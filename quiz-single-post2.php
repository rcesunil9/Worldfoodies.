<?php
/*
 * Template Name: Quiz2
 * Template Post Type: post
 */
get_header();
if (have_posts()) : while (have_posts()) : the_post();

    $quiz_name = get_post_field("quiz") ? get_post_field("quiz") : 'gardening';

    $ad_side = isset($ad_side) && !empty($ad_side) ? $ad_side : 'mygardenway/21899701607';
    $ad_top = isset($ad_top) && !empty($ad_top) ? $ad_top : 'mygardenway/mygardenway.com_footerJS';
    $ad_bottom = isset($ad_bottom) && !empty($ad_bottom) ? $ad_bottom : 'mygardenway/21899701769';

    $recent_posts = array();
    query_posts('posts_per_page=3');
    while (have_posts()) : the_post();
      $img_url = has_post_thumbnail() ? wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('150', '150'))[0] : '';
      array_push($recent_posts, array("title" => get_the_title(), "link" => get_permalink(), "image" => $img_url));
    endwhile;
    wp_reset_query();

    echo '<script>window.adSide="' . $ad_side . '";window.adTop="' . $ad_top . '";window.adBottom="' . $ad_bottom . '";window.quizName="' . $quiz_name . '";window.recentPosts=' . json_encode($recent_posts) . ';</script>';

  endwhile;
endif; ?>
<!-- <div class="embed-responsive embed-responsive-16by9"> -->
<!-- <main id="main" class="site-main" stlye="display:block;"> -->
<iframe id="iFrame1" src="<?php echo 'https://thenewsflare.com/landingdev/quiz-template-adunits.php?quiz='.$quiz_name.'&ad_bottom='.$ad_bottom.'&ad_side='.$ad_side.'&domain='.$_SERVER['SERVER_NAME']; ?>" scrolling="yes" style="width:100%" frameborder="0" ></iframe>
<!-- </main> -->
<!-- </div> -->
<!-- &ad_bottom=mygardenway/21899701769&ad_side=mygardenway/21899701607&domain=mygardenway.com -->
<script>
   let iframe = document.querySelector('#iFrame1');
   iframe.height = screen.height+'px';
</script>

<!-- <script>
console.log('new test');
let height = window.document.documentElement.offsetHeight;
let iframe = document.querySelector('#iFrame1');
window.parent.postMessage(height , '*');

iframe.height = '657px';

</script> -->

<!-- <script>onmessage = function(e){ // use real event handlers in production
      //  alert("from frame: " + e.data.name);
       console.log(e);
       let iframe = document.querySelector('#iFrame1');
       iframe.height = e.data.height+'px';
      // console.log(e.data.height);
 };</script> -->

<!-- <script>
  if (window.addEventListener) {
    window.addEventListener('message', data, false);
  } else if (window.attachEvent) {
    window.attachEvent('onmessage', data);
  }

  function data(e) {
    console.log(e);
    let iframe = document.querySelector('#iFrame1');
    if (e.origin === 'https://thenewsflare.com') {
      let elementsData = e.data;
      
      iframe.height = elementsData+elementsData - 250 + "px";
    }

    console.log(iframe.height);
   
  }
</script> -->

<script>
// $(document).scroll(function () {
//     var scrollTop = $(window).scrollTop();
//     var docHeight = $(document).height();
//     var winHeight = $(window).height();
//     var scrollPercent = scrollTop / (docHeight - winHeight);
//     var divHeight = $("iframe").height();
//     var divContentHeight = $('iframe')[0].scrollHeight;
//     var equation = scrollPercent * (divContentHeight - divHeight);
//     $('iframe').scrollTop(equation);

// });
// console.log("Hello there!!!!!!");

</script>

<?php get_footer(); ?>
<!-- </script> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet" />
<link href="https://quizzes.foreshop.net/prod2/static/css/2.af3c1da9.chunk.css" rel="stylesheet">
<link href="https://quizzes.foreshop.net/prod2/static/css/main.ac59610e.chunk.css" rel="stylesheet">
<div id="quiz-root" class="h-100"></div>
<script>
  ! function(e) {
    function r(r) {
      for (var n, f, i = r[0], l = r[1], a = r[2], c = 0, s = []; c < i.length; c++) f = i[c], Object.prototype.hasOwnProperty.call(o, f) && o[f] && s.push(o[f][0]), o[f] = 0;
      for (n in l) Object.prototype.hasOwnProperty.call(l, n) && (e[n] = l[n]);
      for (p && p(r); s.length;) s.shift()();
      return u.push.apply(u, a || []), t()
    }

    function t() {
      for (var e, r = 0; r < u.length; r++) {
        for (var t = u[r], n = !0, i = 1; i < t.length; i++) {
          var l = t[i];
          0 !== o[l] && (n = !1)
        }
        n && (u.splice(r--, 1), e = f(f.s = t[0]))
      }
      return e
    }
    var n = {},
      o = {
        1: 0
      },
      u = [];

    function f(r) {
      if (n[r]) return n[r].exports;
      var t = n[r] = {
        i: r,
        l: !1,
        exports: {}
      };
      return e[r].call(t.exports, t, t.exports, f), t.l = !0, t.exports
    }
    f.m = e, f.c = n, f.d = function(e, r, t) {
      f.o(e, r) || Object.defineProperty(e, r, {
        enumerable: !0,
        get: t
      })
    }, f.r = function(e) {
      "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
        value: "Module"
      }), Object.defineProperty(e, "__esModule", {
        value: !0
      })
    }, f.t = function(e, r) {
      if (1 & r && (e = f(e)), 8 & r) return e;
      if (4 & r && "object" == typeof e && e && e.__esModule) return e;
      var t = Object.create(null);
      if (f.r(t), Object.defineProperty(t, "default", {
          enumerable: !0,
          value: e
        }), 2 & r && "string" != typeof e)
        for (var n in e) f.d(t, n, function(r) {
          return e[r]
        }.bind(null, n));
      return t
    }, f.n = function(e) {
      var r = e && e.__esModule ? function() {
        return e.default
      } : function() {
        return e
      };
      return f.d(r, "a", r), r
    }, f.o = function(e, r) {
      return Object.prototype.hasOwnProperty.call(e, r)
    }, f.p = "/";
    var i = this.webpackJsonpforequiz = this.webpackJsonpforequiz || [],
      l = i.push.bind(i);
    i.push = r, i = i.slice();
    for (var a = 0; a < i.length; a++) r(i[a]);
    var p = l;
    t()
  }([])
</script>
<script src="https://quizzes.foreshop.net/prod2/static/js/2.7f9d8870.chunk.js"></script>
<script src="https://quizzes.foreshop.net/prod2/static/js/main.6507b73b.chunk.js"></script> -->  