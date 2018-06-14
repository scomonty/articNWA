 $(document).ready(function() {
 var template = ["<div class=\"stats\">", "<div class=\"rating\"><ul class=\"rating-group\">{RATING}</ul></div>", "</div>"].join(""),
 reviewItem = '',
 targetDiv = document.getElementsByClassName('ratingFlake'),
 stringRating = document.getElementsByClassName('rating').innerHTML,
            rating = Math.round(stringRating);
          switch (rating) {
            case 5:
              stringRating = '<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>';
              break;
            case 4:
              stringRating = '<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>';
              break;
            case 3:
              stringRating = '<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>';
              break;
            case 2:
              stringRating = '<span class="fa fa-star"></span><span class="fa fa-star"></span>';
              break;
            case 1:
              stringRating = '<span class="fa fa-star"></span>';
              break;
            case 0:
              stringRating = '<span></span>';
              break;
          }
          reviewItem += template.replace("{RATING}", stringRating);
          $('#ratingFlake').append(reviewItem);
        });
