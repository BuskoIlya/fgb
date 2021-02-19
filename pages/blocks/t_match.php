<script type='text/x-jquery-tmpl' id='t_match'>
  <div class="news_item_css">
    <p>
      <small class="news_item_date">
        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
        ${date}
      </small>
      <small class="news_item_author">
        <span class="glyphicon glyphicon-user" aria-hidden="true">
          ${author}
        </span>
      </small>
      <br>
      <div class="news_item_address">
        <div style="float: left"><img class="place_icon" src="${place_css}"/></div>
        <i class="address_text">${address}</i></div>
      <br>
      <a href="${www_ref}">Ссылка на сайт матча ${ref_name}</a>
      <br>
      <br>
      <a href="../../world/eu_20_21.php">Страница лиги D</a>
    </p>
  </div>
  <div class="match_item_info_css row">

      <div class="match_item_block">
        <div class="match_item_data">
          <div class="match_item_img">
            <p><img class="flag_img" src=${flag1} alt=""></p>
            <p>${name1}</p>
            <p>${score1}</p>
            <br><br>
            <div style="float: left"><img class="place_icon" src="${photo11}"/></div>
            <p>${player11}</p>
            <p>${score11}</p>
            <div style="float: left"><img class="place_icon" src="${photo12}"/></div>
            <p>${player12}</p>
            <p>${score12}</p>
            <div style="float: left"><img class="place_icon" src="${photo13}"/></div>
            <p>${player13}</p>
            <p>${score13}</p>
            <div style="float: left"><img class="place_icon" src="${photo14}"/></div>
            <p>${player14}</p>
            <p>${score14}</p>
          </div>
          <div class="match_item_img">
            <p><img class="flag_img" src=${flag2} alt=""></p>
            <p>${name2}</p>
            <p>${score2}</p>
            <br><br>
            <div style="float: right"><img class="place_icon" src="${photo21}"/></div>
            <p>${player21}</p>
            <p>${score21}</p>
            <div style="float: right"><img class="place_icon" src="${photo22}"/></div>
            <p>${player22}</p>
            <p>${score22}</p>
            <div style="float: right"><img class="place_icon" src="${photo23}"/></div>
            <p>${player23}</p>
            <p>${score23}</p>
            <div style="float: right"><img class="place_icon" src="${photo24}"/></div>
            <p>${player24}</p>
            <p>${score24}</p>
          </div>
        </div>
      </div>

      {{if (video_author != null && video_author != "")}}
      <div class="news_item_css" style="text-align:center; margin-top:20px">
        <p style="font-size: 16px;">Обзор матча</p>
        <p>
        <small class="news_item_author" style="margin:0">
          <span class="glyphicon glyphicon-user" aria-hidden="true"
            style="vertical-align: super"></span>
          <a href="../../../pages/menu/persons.php"
          class="color_fill ${video_author_type}" style="padding-left:5px">
              ${video_author}
          </a>
        </small>
        </p>
        <p>
          <video width="550" height="550" controls>
            <source src="${video_ref}" type="video/mp4">
          </video>
        </p>
      </div>
      {{/if}}

    <div class="table-responsive"
      style="width:fit-content;margin:0 auto;margin-top:20px;font-size:14px">
      <table class="table table-striped table-hover table-bordered">
        <tbody>
          <tr>
            <td style="vertical-align: middle">1</td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">&#9679;</strong>
              <img src=${m1_flag_b} width="30" height="20px"></img>
              ${m1_name_b}
            </td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">&#9675;</strong>
              <img src=${m1_flag_w} width="30" height="20px"></img>
              ${m1_name_w}
            </td>
            <td style="vertical-align:middle">
              <a href="${m1}" download>
                <span class="glyphicon glyphicon-download span_icon" aria-hidden="true"
                  title="Скачать"></span>
              </a>
            </td>
            <td style="vertical-align:middle">
              <a href="#" onclick="load_match_2_board('${m1_w}', '${m1_flag_b}', '${m1_name_b}','${m1_photo_b}', '${m1_flag_w}', '${m1_name_w}', '${m1_photo_w}', '${m1_score_b}', '${m1_score_w}')">
                <span class="glyphicon glyphicon-eye-open span_icon" aria-hidden="true"
                  title="Посмотреть"></span>
              </a>
            </td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">${m1_res_col}</strong>
              ${m1_res_score}
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle">2</td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">&#9679;</strong>
              <img src=${m2_flag_b} width="30" height="20px"></img>
              ${m2_name_b}
            </td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">&#9675;</strong>
              <img src=${m2_flag_w} width="30" height="20px"></img>
              ${m2_name_w}
            </td>
            <td style="vertical-align:middle">
              <a href="${m2}" download>
                <span class="glyphicon glyphicon-download span_icon" aria-hidden="true"
                  title="Скачать"></span>
              </a>
            </td>
            <td style="vertical-align:middle">
              <a href="#"
              onclick="load_match_2_board('${m2_w}', '${m2_flag_b}', '${m2_name_b}', '${m2_photo_b}', '${m2_flag_w}', '${m2_name_w}', '${m2_photo_w}', '${m2_score_b}', '${m2_score_w}')">
                <span class="glyphicon glyphicon-eye-open span_icon" aria-hidden="true"
                  title="Посмотреть"></span>
              </a>
            </td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">${m2_res_col}</strong>
              ${m2_res_score}
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle">3</td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">&#9679;</strong>
              <img src=${m3_flag_b} width="30" height="20px"></img>
              ${m3_name_b}
            </td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">&#9675;</strong>
              <img src=${m3_flag_w} width="30" height="20px"></img>
              ${m3_name_w}
            </td>
            <td style="vertical-align:middle">
              <a href="${m3}" download>
                <span class="glyphicon glyphicon-download span_icon" aria-hidden="true"
                  title="Скачать"></span>
              </a>
            </td>
            <td style="vertical-align:middle">
              <a href="#" onclick="load_match_2_board('${m3_w}', '${m3_flag_b}', '${m3_name_b}', '${m3_photo_b}', '${m3_flag_w}', '${m3_name_w}', '${m3_photo_w}', '${m3_score_b}', '${m3_score_w}')">
                <span class="glyphicon glyphicon-eye-open span_icon" aria-hidden="true"
                  title="Посмотреть"></span>
              </a>
            </td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">${m3_res_col}</strong>
              ${m3_res_score}
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle">4</td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">&#9679;</strong>
              <img src=${m4_flag_b} width="30" height="20px"></img>
              ${m4_name_b}
            </td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">&#9675;</strong>
              <img src=${m4_flag_w} width="30" height="20px"></img>
              ${m4_name_w}
            </td>
            <td style="vertical-align:middle">
              <a href="${m4}" download>
                <span class="glyphicon glyphicon-download span_icon" aria-hidden="true"
                  title="Скачать"></span>
              </a>
            </td>
            <td style="vertical-align:middle">
              <a href="#" onclick="load_match_2_board('${m4_w}', '${m4_flag_b}', '${m4_name_b}', '${m4_photo_b}', '${m4_flag_w}', '${m4_name_w}', '${m4_photo_w}', '${m4_score_b}', '${m4_score_w}')">
                <span class="glyphicon glyphicon-eye-open span_icon" aria-hidden="true"
                  title="Посмотреть"></span>
              </a>
            </td>
            <td style="padding-right: 10px">
              <strong style="font-size: 24px; padding: 0 10px">${m4_res_col}</strong>
              ${m4_res_score}
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</script>
