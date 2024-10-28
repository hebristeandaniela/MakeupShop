
    $(document).ready(function () {
            var page = '{{ Request::segment(2) }}';
            if ($('.nav-link.nav-' + page).length > 0) {
        $('.nav-link.nav-' + page).addClass('active');
    if ($('.nav-link.nav-' + page).hasClass('tree-item') === true) {
        $('.nav-link.nav-' + page).closest('.nav-treeview').siblings('a').addClass('active');
    $('.nav-link.nav-' + page).closest('.nav-treeview').parent().addClass('menu-open');
                }
    if ($('.nav-link.nav-' + page).hasClass('nav-is-tree') === true) {
        $('.nav-link.nav-' + page).parent().addClass('menu-open');
                }
            }
    $('.nav-link.active').addClass('bg-gradient-pink');
        });
