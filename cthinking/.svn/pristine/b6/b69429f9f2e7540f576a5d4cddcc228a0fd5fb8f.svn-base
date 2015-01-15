jQuery.extend(jQuery, {
  // jQuery UI 弹出iframe窗口
  jqopen: function(url, options) {
    var html =
    '<div class="dialog" id="dialog-window" title="">' +
    ' <iframe src="' + url + '" frameBorder="0" style="border: 0; " scrolling="no" width="100%" height="100%"></iframe>' +
    '</div>';
    return $(html).dialog($.extend({
      modal: true,
      closeOnEscape: false,
      draggable: true,
      resizable: false,
      close: function(event, ui) {
        $(this).dialog("destroy"); // 关闭时销毁
      }
    }, options));
  }
});
