jQuery(document).ready(function () {
  $('#searchForm #wordInput').keyup(function () {
    $word = $(this).val();
    $type = $('#direction').val();

    if ($word.length > 1) {
      $.ajax({
        url: 'ajax.php',
        type: 'post',
        data: {
          word: $word,
          type: $type
        },
        success: function (response) {
          $('#result').html(response);
        },
        error: function () {

        }
      });
    } else {
      $('#result').html('');
    }
  });
});