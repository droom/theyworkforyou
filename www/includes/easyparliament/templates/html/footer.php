                <div id="footer">
                    <div class="full-page__row">
                        <div id="footer-about">
                            <p>
                                TheyWorkForYou lets you find out what your MP, MSP or MLA is doing in your name, read debates, written answers, see what&rsquo;s coming up in Parliament, and sign up for email alerts when there&rsquo;s past or future activity on someone or something you&rsquo;re interested in.
                            </p>

                              <p>
                                  This website is run by <a href="http://www.mysociety.org/">mySociety</a>, the project of
                                  a <a href="http://www.ukcod.org.uk/">registered charity</a>.
                          If you find it useful, please <a href="http://www.mysociety.org/donate/">donate</a> to keep it running.
                              </p>
                        </div>
                      <div id="footer-links">
                        <div id="stay-up-to-date" class="row">
                          <div class="large-12 columns">
                                <h5>
                                    STAY UP TO DATE
                                </h5>
                          </div>
                        </div>
                        <div class="row">
                            <div class="footer_follow__column columns">
                              <p>Sign up to our monthly newsletter</p>
                                <form method="post" action="//mysociety.us9.list-manage.com/subscribe/post?u=53d0d2026dea615ed488a8834&id=287dc28511">
                                <input type="email" placeholder="Your email address" name="EMAIL"/>
                                <label style="position: absolute; left: -5000px;">
                                  Leave this box empty: <input type="text" name="b_53d0d2026dea615ed488a8834_287dc28511" tabindex="-1" value="" />
                                </label>
                                <input type="submit" value="Subscribe" name="subscribe"/>
                              </form>
                            </div>
                            <div class="footer_follow__column">
                            <p>
                            Follow us
                            </p>
                          <div class="fb-like" data-href="https://www.facebook.com/TheyWorkForYou" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false"></div>

                          <a href="https://twitter.com/theyworkforyou" class="twitter-follow-button" data-show-count="false">Follow @theyworkforyou</a>
                            <script>

                                window.twttr = (function (d,s,id) {
                                    var t, js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return; js=d.createElement(s); js.id=id;
                                    js.src="https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);

                                    return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
                                }(document, "script", "twitter-wjs"));

                                // Used with the Google Analytics Tweet tracking
                                function extractParamFromUri(uri, paramName) {
                                    if (!uri) {
                                        return;
                                    }
                                    var uri = uri.split('#')[0];  // Remove anchor.
                                    var parts = uri.split('?');  // Check for query params.
                                    if (parts.length == 1) {
                                        return;
                                    }
                                    var query = decodeURI(parts[1]);

                                    // Find url param.
                                    paramName += '=';
                                    var params = query.split('&');
                                    for (var i = 0, param; param = params[i]; ++i) {
                                        if (param.indexOf(paramName) === 0) {
                                            return unescape(param.split('=')[1]);
                                        }
                                    }
                                }

                                function trackTwitter(intent_event) {
                                    if (intent_event) {
                                        var opt_pagePath;
                                        if (intent_event.target && intent_event.target.nodeName == 'IFRAME') {
                                            opt_target = extractParamFromUri(intent_event.target.src, 'url');
                                        }
                                        ga('send', 'social', 'twitter', 'follow', opt_pagePath);
                                    }
                                }

                                twttr.ready(function (twttr) {
                                    twttr.events.bind('follow', trackTwitter);
                                });

                            </script>
                            </div>
                        </div>
                        <div id="footer-nav" class="row">
                            <div class="footer_link__column">
                                <dl>
                                    <dt>ABOUT</dt>
                                    <dd>
                                        <ul>
                                            <?php foreach ($footer_links['about'] as $footer_link): ?>
                                                <li><a href="<?= $footer_link['href'] ?>" title="<?= $footer_link['title'] ?>" class="<?= $footer_link['classes'] ?>"><?= $footer_link['text'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                            <div class="footer_link__column">
                                <dl>
                                    <dt>PARLIAMENTS &amp; ASSEMBLIES</dt>
                                    <dd>
                                        <ul>
                                            <?php foreach ($footer_links['assemblies'] as $footer_link): ?>
                                                <li><a href="<?= $footer_link['href'] ?>" title="<?= $footer_link['title'] ?>" class="<?= $footer_link['classes'] ?>"><?= $footer_link['text'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                            <div class="footer_link__column">
                                <dl>
                                    <dt>DEVELOPERS</dt>
                                    <dd>
                                        <ul>
                                            <?php foreach ($footer_links['tech'] as $footer_link): ?>
                                                <li><a href="<?= $footer_link['href'] ?>" title="<?= $footer_link['title'] ?>" class="<?= $footer_link['classes'] ?>"><?= $footer_link['text'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                            <div class="footer_link__column">
                                <dl>
                                    <dt>INTERNATIONAL PROJECTS</dt>
                                    <dd>
                                        <ul>
                                            <?php foreach ($footer_links['international'] as $footer_link): ?>
                                                <li><a href="<?= $footer_link['href'] ?>" title="<?= $footer_link['title'] ?>" class="<?= $footer_link['classes'] ?>"><?= $footer_link['text'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                  </div>
            </div>
        <?php

        // DAMN, this really shouldn't be in PAGE.
        $db = new ParlDB;
        $db->display_total_duration();

        $duration = getmicrotime() - STARTTIME;
        twfy_debug ("TIME", "Total time for page: $duration seconds.");
        if (!isset($_SERVER['WINDIR'])) {
            $rusage = getrusage();
            $duration = $rusage['ru_utime.tv_sec']*1000000 + $rusage['ru_utime.tv_usec'] - STARTTIMEU;
            twfy_debug ('TIME', "Total user time: $duration microseconds.");
            $duration = $rusage['ru_stime.tv_sec']*1000000 + $rusage['ru_stime.tv_usec'] - STARTTIMES;
            twfy_debug ('TIME', "Total system time: $duration microseconds.");
        }

?>

</div> <!-- end #footer -->
</div> <!-- end #container -->

<script src="/js/foundation/foundation.js"></script>
<script src="/js/foundation/foundation.magellan.js"></script>
<script src="/js/foundation/foundation.reveal.js"></script>
<script src="/js/riveted.min.js"></script>
<script src="/js/jquery.scrolldepth.min.js"></script>

<script>

  $( document ).ready(function() {

    $(".menu-dropdown").click(function(e) {
      var t = $(e.target);
      if ( ! t.hasClass('button') ) {
          t = t.parent('.button');
      }
      t.toggleClass('open');
      t.parent().next(".nav-menu").toggleClass('closed');
    });

    $.scrollDepth();

  });

  $(document).foundation();

  riveted.init();

  $(function() {
    setTimeout(function() {
      try {
        ga('send', 'event', 'engagement', 'timer', '7');
      } catch(err){}
    }, 7000);
  });

  (function(){var e=0.5;var t=null;var n=document.cookie.split(";");for(var r=0;r<n.length;r++){var i=n[r];while(i.charAt(0)==" "){i=i.substring(1,i.length)}if(i.indexOf("ms_srv_t=")==0){var t=i.substring("ms_srv_t=".length,i.length)}if(i.indexOf("ms_srv_r=")==0){var s=i.substring("ms_srv_r=".length,i.length)}}if(t==null){if(Math.random()<e){var o=Math.round((new Date).getTime()/1e3);document.cookie="ms_srv_t="+o+"; path=/";document.cookie="ms_srv_r="+document.referrer+"; path=/";t=o;s=document.referrer}else{document.cookie="ms_srv_t=X; path=/";t="X"}}if(t!="X"&&!!document.getElementById("ms_srv_wrapper")){var u=Math.round((new Date).getTime()/1e3)-t;var f=document.getElementById("ms_srv_link");data={ms_time:u,ms_referrer:s||null,ms_transaction:f.getAttribute("data-transaction")};var l=[];for(var c in data){l.push(encodeURIComponent(c)+"="+encodeURIComponent(data[c]))}f.href=f.href+"?"+l.join("&");document.getElementById("ms_srv_wrapper").style.display=""}})()
</script>
</body>
