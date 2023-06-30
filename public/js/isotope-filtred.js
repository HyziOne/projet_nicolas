var filters = {};
var filterFns = {
  greaterThan50: function() {},
  even: function() {}
};

var $grid = $('#portfolio').isotope({
  itemSelector: '.item',
  layoutMode: 'fitRows',
  filter: function() {
    var isMatched = true;
    var $this = $(this);

    for (var prop in filters) {
      var filter = filters[prop];
      filter = filterFns[filter] || filter;
      if (filter) {
        isMatched = isMatched && $this.is(filter);
      }
      if (!isMatched) {
        break;
      }
    }
    return isMatched;
  }
});

$('#portfolio-buttons').on('click', 'button', function() {
  var $this = $(this);
  var $buttonGroup = $this.parent('.button-group');
  var filterGroup = $buttonGroup.attr('data-filter-group');
  filters[filterGroup] = $this.attr('data-filter');
  $grid.isotope();
  $buttonGroup.find('.is-checked').removeClass('is-checked');
  $this.addClass('is-checked');
});
