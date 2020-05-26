<script>
    function send_emails(news_id, ref, title, og_img) {
        $.ajax({
            async : false,
            url: 'php/send_emails.php',
            type: 'POST',
            cache: false,
            data: {'news_id': news_id, 'news_ref': ref,
                'news_title': title, 'og_img': og_img},
            dataType: 'html',
            success: function (data) {
                if (data == 'Successful') {
                    document.location.href = "index.php";
                } else {
                    document.location.href = "pages/common/error-info.php";
                }
            }
        });
        load_data();
    }

    function load_data() {
        $('#news_list').empty();
        for (let i = news_2020.length - 1; i >= 0; i--) {
            if (news_2020[i].type == 'tournament') {
                $('#news_template').tmpl(news_2020[i]).appendTo('#news_list');
            } else {
                $('#match_template').tmpl(news_2020[i]).appendTo('#news_list');
            }
        }
    }

    $(document).ready(function () {
        load_data();
    });
</script>

<script type='text/x-jquery-tmpl' id='news_template'>
  <div class="news_element row">
      <div class="news_data">
        <div style="padding: 15px">
          <div class="news_img">
            <a><img src=${img}></a>
          </div>
          <div style="display:table-cell;vertical-align:top;padding-left: 15px">
            <p><small class="news_date">
              <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>${date}
            </small></p>
            <p><a href="${ref}" class="news_title color_fill ${decoration}">${title}</a></p>
            <p class="news_text text-justify">${description}</p>
          </div>
        </div>
        <div class="news_footer">
          <?php if (isset($_COOKIE['user_role']) && $_COOKIE['user_role'] == 'admin'): ?>
            <small class="menu_icon ${is_send_emails}" style="margin:0 10px"
                onclick="send_emails(${id}, '${ref}', '${title}', '${og_img}')">
                <span class="glyphicon glyphicon-send" aria-hidden="true">
                </span>
            </small>
          <?php endif; ?>
          <small class="news_author">
            <span class="glyphicon glyphicon-user" aria-hidden="true">
              ${author}
            </span>
          </small>
        </div>
      </div>
  </div>
</script>

<script type='text/x-jquery-tmpl' id='match_template'>
  <div class="match_element row">
      <div class="match_data">
        <p style="display:table-cell;margin: 0;padding-top: 10px">
          <p><small class="match_date">
            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>${date}
          </small></p>
          <p><a href="${ref}" class="match_title color_fill ${decoration}">${title}
          </a></p>
        </p>
        <div style="padding: 10px 45px;">
          <div class="match_img">
            <p><img src=${flag1} alt=""></p>
            <p>${name1}</p>
            <p>${score1}</p>
          </div>
          <div class="match_img">
            <p><img src=${flag2} alt=""></p>
            <p>${name2}</p>
            <p>${score2}</p>
          </div>
        </div>
        <div class="match_footer">
            <?php if (isset($_COOKIE['user_role']) && $_COOKIE['user_role'] == 'admin'): ?>
                <small class="menu_icon ${is_send_emails}" style="margin:0 10px"
                    onclick="send_emails(${id}, '${ref}', '${title}: ${name1} - ${name2}', '${og_img}')">
                    <span class="glyphicon glyphicon-send" aria-hidden="true">
                    </span>
                </small>
            <?php endif; ?>
            <small class="match_author">
                <span class="glyphicon glyphicon-user" aria-hidden="true">
                    ${author}
                </span>
          </small>
        </div>
      </div>
  </div>
</script>

<div id="news_list">
</div>