/* eslint-disable no-undef */
// import 'bootstrap/js/dist/util'
// import 'bootstrap/js/dist/alert'
// import 'bootstrap/js/dist/button'
// import 'bootstrap/js/dist/collapse'
// import 'bootstrap/js/dist/popover'
// import 'bootstrap/js/dist/tooltip'

// Header
$('.menu-primary-container li').addClass('nav-item ml-2 mr-2').children('a').addClass('nav-link')
$('.menu-primary-container .current-menu-item a').addClass('active')

// Sidebar
$('.menu-sidebar-container li').addClass('nav-item').children('a').addClass('nav-link text-nowrap')
$('.menu-sidebar-container .current-menu-item a').addClass('active position-relative')
$('.menu-sidebar-container .current-menu-parent a').addClass('active position-relative')

// Home || Category
$('.archive-post-item .card').on('mouseenter', function () {
  $(this).addClass('shadow-sm')
})
$('.archive-post-item .card').on('mouseleave', function () {
  $(this).removeClass('shadow-sm')
})

$('.sub-opt a').on('click', function () {
  $(this).parent().parent().siblings('.archive-post-item').toggleClass('current')
  $(this).addClass('d-none').siblings().removeClass('d-none')
})

$('.archive-post-item .card').each(function () {
  // 点击Card跳转
  const uri = $(this).find('.card-title span a').attr('href')
  $(this).on('click', function () {
    $(window).attr('location', uri)
  })
  $(this).find('.card-title span').html($(this).find('.card-title span').text())

  // Card增加title、tooltip
  // const attrTitle = $(this).find('.card-text').text()
  // $(this).attr('title', attrTitle).attr('data-toggle', 'tooltip')
})
// $('[data-toggle="tooltip"]').tooltip()

// Single
$('blockquote').addClass('blockquote position-relative pt-2 pb-2 pl-4 pr-3 bg-light')
$('.post-related-content li,.post-latest-content li').on('mouseover', function () {
  $(this).addClass('shadow-sm').siblings().removeClass('shadow-sm')
})
$('.post-related-content li,.post-latest-content li').on('mouseleave', function () {
  $(this).removeClass('shadow-sm')
})

// Smooth Scroll
// https://github.com/cferdinandi/smooth-scroll
// eslint-disable-next-line no-unused-vars
const scroll = new SmoothScroll('a[href*="#"]')

// Footer
// $('.float-item-cat').on('click', function () {
//   const sidebarWidth = $('.widget-area').width()
//   if (sidebarWidth < 0 || sidebarWidth === 0) {
//     $('.widget-area').addClass('current overflow-auto position-fixed').removeClass('overflow-hidden')
//   } else {
//     $('.widget-area').removeClass('current overflow-auto position-fixed').addClass('overflow-hidden')
//   }
// })

// Archive
$('.wp-pagenavi a,.wp-pagenavi span').wrap('<li class="page-item"></li>')
$('.wp-pagenavi .page-link.current').parent().addClass('active')
const pagenaviHtml =
  '<ul class="pagination">' + $('.wp-pagenavi').html() + '</ul>'
$('.wp-pagenavi').html(pagenaviHtml).addClass('d-inline-block')
$('.wp-pagenavi span.extend,.wp-pagenavi a.last,.wp-pagenavi a.first').addClass('page-link')

// Footer
$('.footer-links ul').addClass('d-inline-flex list-unstyled')
$('.footer-links li').addClass('ml-1 mr-1')
$('.footer-links li a').addClass('text-white')

// #binancezhModal
if (!Cookies.get('binancezhModal')) {
  $('#binancezhModal').modal('show')
  $('#binancezhModal').on('shown.bs.modal', function () {
    // eslint-disable-next-line no-undef
    Cookies.set('binancezhModal', '1')
    $('#binancezhModal .btn-primary').trigger('focus')
    $('#binancezhModal .btn-primary').on('click', function () {
      window.open('https://accounts.binancezh.top/zh-CN/register?ref=NKJ1QTQS', '_blank')
      $('#binancezhModal').modal('hide')
    })
  })
}
