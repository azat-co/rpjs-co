$(document).ready(function($) {

  // Sidebar Toggle

  $('.btn-navbar').click(function() {
    $('html').toggleClass('expanded');
  });



  // Slide Toggles

  $('#section3 .button').on('click', function() {

    var section = $(this).parent();

    section.toggle();
    section.siblings(".slide").slideToggle('2000', "easeInQuart");
  });

  $('#section3 .read-more').on('click', function() {

    var section = $(this).parent();

    section.toggle();
    section.siblings(".slide").slideToggle('2000', "easeInQuart");
  });

  $('#section4 .article-tags li').on('click', function() {

    var section = $(this).parents('.span4');
    var category = $(this).attr('data-blog');
    var articles = section.siblings();

    // Change Tab BG's
    $(this).siblings('.current').removeClass('current');
    $(this).addClass('current');

    // Hide/Show other articles
    section.siblings('.current').removeClass('current').hide();

    $(articles).each(function(index) {

      var newCategory = $(this).attr('data-blog');

      if (newCategory == category) {
        $(this).slideDown('1000', "easeInQuart").addClass('current');
      }
    });

  });



  // Waypoints Scrolling

  var links = $('.navigation').find('li');
  var button = $('.intro button');
  var section = $('section');
  var mywindow = $(window);
  var htmlbody = $('html,body');


  section.waypoint(function(direction) {

    var datasection = $(this).attr('data-section');

    if (direction === 'down') {
      $('.navigation li[data-section="' + datasection + '"]').addClass('active').siblings().removeClass('active');
      try {
        window.location.hash = datasection;
      } catch(e) {}      
    } else {
      console.log('up')
      // var newsection = parseInt(datasection) - 1;
      // console.log($('.navigation li.active').prev())//.addClass('active');
      var prev = $('.navigation li.active').prev();
      // console.log($('.navigation li.active').removeClass('active'))//.addClass('active');
      $('.navigation li.active').removeClass('active');
      prev.addClass('active');
      try {
        window.location.hash = datasection;
      } catch(e) {}
      // $('.navigation li[data-section="' + newsection + '"]').addClass('active').siblings().removeClass('active');
    }

  });

  mywindow.scroll(function() {
    if (mywindow.scrollTop() == 0) {
      $('.navigation li[data-section="1"]').addClass('active');
      $('.navigation li[data-section="2"]').removeClass('active');
    }
  });

  function goToByScroll(datasection) {
    // console.log(window.location.hash, datasection)
    if (window.location.hash) {
      window.location.hash = '';
      window.location.hash = '#' + datasection;
    } else {
      try {
        window.location.hash ='#' + datasection;
      } catch(e) {}
    }
    if (datasection == 1) {
      htmlbody.animate({
        scrollTop: $('.section[data-section="' + datasection + '"]').offset().top
      }, 500, 'easeOutQuart');
    } else {
      htmlbody.animate({
        scrollTop: $('.section[data-section="' + datasection + '"]').offset().top + 70
      }, 500, 'easeOutQuart');
    }

  }

  links.click(function(e) {
    e.preventDefault();
    var datasection = $(this).attr('data-section');
    goToByScroll(datasection);
  });

  button.click(function(e) {
    e.preventDefault();
    var datasection = $(this).attr('data-section');
    goToByScroll(datasection);
  });
  $('.next-section').click(function(e) {
    e.preventDefault();
    var datasection = $(this).attr('data-section');
    goToByScroll(datasection);
  })
  // Snap to scroll (optional)

  /*

    section.waypoint(function (direction) {

        var nextpos = $(this).attr('data-section');
        var prevpos = $(this).prev().attr('data-section');

        if (nextpos != 1) {
	        if (direction === 'down') {
	            htmlbody.animate({
		            scrollTop: $('.section[data-section="' + nextpos + '"]').offset().top
		        }, 750, 'easeOutQuad');
	        }
	        else {
	            htmlbody.animate({
		            scrollTop: $('.section[data-section="' + prevpos + '"]').offset().top
		        }, 750, 'easeOutQuad');
	        }
        }
        

    }, { offset: '60%' });	
    
    */



  // Redirect external links

  $("a[rel='external']").click(function() {
    this.target = "_blank";
  });


  // Modernizr SVG backup

  if (!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function() {
      return $(this).attr('src').replace('.svg', '.png');
    });
  }


  //-------------------- Animate D3JS Charts --------------------//

  // Create responsibilities graph using D3JS charts

  var data2 = {
    pct: [15, 30, 17, 40]
  };
  var data = {
    pct: [25, 25, 25, 25]
  };

  var colors = d3.scale.ordinal()
    .domain(d3.range(4))
    .range(['#C8C8C4', '#7E7E77', '#4A4A45', '#151515']);

  var labels = ['Social Media', 'UI Design', 'Performance Testing', 'Responsive Development'];

  var w = 210, // width and height, natch
    h = 210,
    r = 100, // arc radius
    dur = 300, // duration, in milliseconds
    donut = d3.layout.pie().sort(null),
    arc = d3.svg.arc().innerRadius(75).outerRadius(85);

  var svg = d3.select("#pie-chart").append("svg:svg")
    .attr("id", "arcmain")
    .attr("width", w).attr("height", h);

  var arc_grp = svg.append("svg:g")
    .attr("class", "arcgrp")
    .attr("transform", "translate(" + (w / 2) + "," + (h / 2) + ")");

  // Draw Arc Paths
  var arcs = arc_grp.selectAll("path")
    .data(donut(data.pct));

  arcs.enter().append("svg:path").attr("stroke", "#F7F7F2").attr("stroke-width", 5)
    .attr("fill", function(d, i) {
    return colors(i);
  })
    .attr("d", arc).each(function(d) {
    this._current = d;
  })
    .transition().duration(dur).ease("elastic").attrTween("d", arcTween);

  arcs.transition().duration(dur).ease("elastic").attrTween("d", arcTween);

  arcs.exit().remove();


  // Store current and interpolate to the new angles.

  function arcTween(a) {
    var i = d3.interpolate(this._current, a);
    this._current = i(0);
    return function(t) {
      return arc(i(t));
    };
  }

  // Update chart

  function updateChart(model) {
    data = eval(model); // which model?
    arcs.data(donut(data.pct)); // recompute angles, rebind data
    arcs.transition().ease("cubic-in-out").duration(dur).attrTween("d", arcTween);

  }


  // Fire animations on section-about

  function animateCharts() {

    // Create toolbox graphs using D3JS charts 
    $(".toolbox-item").each(function(index) {

      // Grab data length
      var datalength = $(this).prev(".toolbox-header").attr("data-length");

      // Append SVG's
      var chart = d3.select(this).append("svg")
        .attr("width", "260")
        .attr("height", "5")
        .attr("class", "tool")
        .style("background-color", "#c8c8c4");

      // Fill SVG's
      var rects = chart.selectAll('rect').data([datalength])
        .enter().append('rect')
        .attr("stroke", "none").attr("fill", "rgb(21, 21, 21)")
        .attr("x", 0)
        .attr("y", 0)
        .attr("height", "5")
        .transition().duration(500).delay(100 * index)
        .attr("width", datalength);
    });

    // Animate Responsibilities	    
    $("#pie-chart .chart-label, #pie-chart .chart-line").each(function(index) {
      $(this).delay(100 * index).fadeIn(300);
    });

    setTimeout(function() {
      updateChart(data2);
    }, 1500);

    // Only display animations once
    // $('this.waypoints('destroy');	    

  }

  $('#section-about').waypoint(function() {

    // Check to see if chart is visible
    if ($('#section-about .tool').is(':visible')) {
      return;
    } else {
      animateCharts();
    }

  });



});