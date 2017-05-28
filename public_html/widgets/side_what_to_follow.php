<div class="side_widget what_to_follow">

    <h2>What to follow</h2>

    <ul class="account_list">
        <li class="account_box what_to_follow_0">
            <div class="icon_box">
                <img src=""/>
            </div>
            <div class="label_box">
              <a href="">
                <h3>
                  <span class="dn emoji_poss"></span>
                  <span class="un"></span>
                </h3>
              </a>
              <button class="follow_button" mid="" data="">
                <i class="fa fa-fw fa-user-plus"></i>
                <span>Follow</span>
              </button>
            </div>
        </li>

        <li class="account_box what_to_follow_1">
            <div class="icon_box">
                <img src=""/>
            </div>
            <div class="label_box">
              <a href="">
                <h3>
                  <span class="dn emoji_poss"></span>
                  <span class="un"></span>
                </h3>
              </a>
              <button class="follow_button" mid="" data="">
                <i class="fa fa-fw fa-user-plus"></i>
                <span>Follow</span>
              </button>
            </div>
        </li>

        <li class="account_box what_to_follow_2">
            <div class="icon_box">
                <img src=""/>
            </div>
            <div class="label_box">
              <a href="">
                <h3>
                  <span class="dn emoji_poss"></span>
                  <span class="un"></span>
                </h3>
              </a>
              <button class="follow_button" mid="" data="">
                <i class="fa fa-fw fa-user-plus"></i>
                <span>Follow</span>
              </button>
            </div>
        </li>
    </ul>
</div>

<script>
  const what_to_follow_0 = JSON.parse(localStorage.getItem("what_to_follow_0"));
  const what_to_follow_1 = JSON.parse(localStorage.getItem("what_to_follow_1"));
  const what_to_follow_2 = JSON.parse(localStorage.getItem("what_to_follow_2"));

  $('.what_to_follow_0 > .icon_box img').attr('src', what_to_follow_0.avatar);
  $('.what_to_follow_0 .label_box > a').attr('href', getRelativeURL(what_to_follow_0.url, what_to_follow_0.id) );
  $('.what_to_follow_0 .label_box > a > h3 .dn').text(what_to_follow_0.display_name);
  $('.what_to_follow_0 .label_box > a > h3 .un').text('@'+what_to_follow_0.username);
  $('.what_to_follow_0 .label_box > .follow_button').attr('mid', what_to_follow_0.id);
  $('.what_to_follow_0 .label_box > .follow_button').attr('data', what_to_follow_0.url);

  $('.what_to_follow_1 > .icon_box img').attr('src', what_to_follow_1.avatar);
  $('.what_to_follow_1 .label_box > a').attr('href', getRelativeURL(what_to_follow_1.url, what_to_follow_1.id) );
  $('.what_to_follow_1 .label_box > a > h3 .dn').text(what_to_follow_1.display_name);
  $('.what_to_follow_1 .label_box > a > h3 .un').text('@'+what_to_follow_1.username);
  $('.what_to_follow_1 .label_box > .follow_button').attr('mid', what_to_follow_1.id);
  $('.what_to_follow_0 .label_box > .follow_button').attr('data', what_to_follow_1.url);

  $('.what_to_follow_2 > .icon_box img').attr('src', what_to_follow_2.avatar);
  $('.what_to_follow_2 .label_box > a').attr('href', getRelativeURL(what_to_follow_2.url, what_to_follow_2.id) );
  $('.what_to_follow_2 .label_box > a > h3 .dn').text(what_to_follow_2.display_name);
  $('.what_to_follow_2 .label_box > a > h3 .un').text('@'+what_to_follow_2.username);
  $('.what_to_follow_2 .label_box > .follow_button').attr('mid', what_to_follow_2.id);
  $('.what_to_follow_0 .label_box > .follow_button').attr('data', what_to_follow_2.url);
</script>