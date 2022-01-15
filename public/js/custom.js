const btnNavOne = document.querySelector('.btn-nav-one');
const itemNavOne = document.querySelector('.item-nav-one');

const btnNavTuo = document.querySelector('.btn-nav-tuo');
const itemNavTuo = document.querySelector('.item-nav-tuo');

const btnNavHome = document.querySelector('.btn-nav-home');
const itemNavHome = document.querySelector('.item-nav-home');

const btnNavShop = document.querySelector('.btn-nav-shop');
const itemNavShop = document.querySelector('.item-nav-shop');

const btnNavPages = document.querySelector('.btn-nav-pages');
const itemNavPages = document.querySelector('.item-nav-pages');

const btnNavBlog = document.querySelector('.btn-nav-blog');
const itemNavBlog = document.querySelector('.item-nav-blog');

const btnNavSubShop = document.querySelector('.btn-nav-sub-shop');
const itemNavSubShop = document.querySelector('.item-nav-sub-shop');

const btnNavElements = document.querySelector('.btn-nav-elements');
const itemNavElements = document.querySelector('.item-nav-elements');

const btnNavCart = document.querySelector('.btn-nav-cart');
const itemNavCart = document.querySelector('.item-nav-cart');

btnNavOne.addEventListener('mouseover', () => {
    itemNavOne.classList.replace('opacity-0', 'opacity-1');
    itemNavOne.style.transform = "translateY(0px)";
    itemNavOne.classList.replace('invisible', 'visible');
});
btnNavOne.addEventListener('mouseout', () => {
    itemNavOne.classList.replace('opacity-1', 'opacity-0');
    itemNavOne.style.transform = "translateY(10px)";
    itemNavOne.classList.replace('visible', 'invisible');
});


btnNavTuo.addEventListener('mouseover', () => {
    itemNavTuo.classList.replace('opacity-0', 'opacity-1');
    itemNavTuo.style.transform = "translateY(0px)";
    itemNavTuo.classList.replace('invisible', 'visible');
});
btnNavTuo.addEventListener('mouseout', () => {
    itemNavTuo.classList.replace('opacity-1', 'opacity-0');
    itemNavTuo.style.transform = "translateY(10px)";
    itemNavTuo.classList.replace('visible', 'invisible');
});

btnNavHome.addEventListener('mouseover', () => {
    itemNavHome.classList.replace('opacity-0', 'opacity-1');
    itemNavHome.style.transform = "translateY(0px)";
    itemNavHome.classList.replace('invisible', 'visible');
});
btnNavHome.addEventListener('mouseout', () => {
    itemNavHome.classList.replace('opacity-1', 'opacity-0');
    itemNavHome.style.transform = "translateY(10px)";
    itemNavHome.classList.replace('visible', 'invisible');
});

btnNavShop.addEventListener('mouseover', () => {
    itemNavShop.classList.replace('opacity-0', 'opacity-1');
    itemNavShop.style.transform = "translateY(0px)";
    itemNavShop.classList.replace('invisible', 'visible');
});
btnNavShop.addEventListener('mouseout', () => {
    itemNavShop.classList.replace('opacity-1', 'opacity-0');
    itemNavShop.style.transform = "translateY(10px)";
    itemNavShop.classList.replace('visible', 'invisible');
});

btnNavPages.addEventListener('mouseover', () => {
    itemNavPages.classList.replace('opacity-0', 'opacity-1');
    itemNavPages.style.transform = "translateY(0px)";
    itemNavPages.classList.replace('invisible', 'visible');
});
btnNavPages.addEventListener('mouseout', () => {
    itemNavPages.classList.replace('opacity-1', 'opacity-0');
    itemNavPages.style.transform = "translateY(10px)";
    itemNavPages.classList.replace('visible', 'invisible');
});

btnNavBlog.addEventListener('mouseover', () => {
    itemNavBlog.classList.replace('opacity-0', 'opacity-1');
    itemNavBlog.style.transform = "translateY(0px)";
    itemNavBlog.classList.replace('invisible', 'visible');
});
btnNavBlog.addEventListener('mouseout', () => {
    itemNavBlog.classList.replace('opacity-1', 'opacity-0');
    itemNavBlog.style.transform = "translateY(10px)";
    itemNavBlog.classList.replace('visible', 'invisible');
});

btnNavElements.addEventListener('mouseover', () => {
    itemNavElements.classList.replace('opacity-0', 'opacity-1');
    itemNavElements.style.transform = "translateY(0px)";
    itemNavElements.classList.replace('invisible', 'visible');
});
btnNavElements.addEventListener('mouseout', () => {
    itemNavElements.classList.replace('opacity-1', 'opacity-0');
    itemNavElements.style.transform = "translateY(10px)";
    itemNavElements.classList.replace('visible', 'invisible');
});

btnNavCart.addEventListener('mouseover', () => {
    itemNavCart.classList.replace('opacity-0', 'opacity-1');
    itemNavCart.style.transform = "translateY(0px)";
    itemNavCart.classList.replace('invisible', 'visible');
});
btnNavCart.addEventListener('mouseout', () => {
    itemNavCart.classList.replace('opacity-1', 'opacity-0');
    itemNavCart.style.transform = "translateY(10px)";
    itemNavCart.classList.replace('visible', 'invisible');
});

btnNavSubShop.addEventListener('mouseover', () => {
    itemNavSubShop.classList.replace('opacity-0', 'opacity-1');
    itemNavSubShop.style.transform = "translateY(0px)";
    itemNavSubShop.classList.replace('invisible', 'visible');
});
btnNavSubShop.addEventListener('mouseout', () => {
    itemNavSubShop.classList.replace('opacity-1', 'opacity-0');
    itemNavSubShop.style.transform = "translateY(10px)";
    itemNavSubShop.classList.replace('visible', 'invisible');
});


var topSellers = document.querySelector('.top-sellers'),
    bestRated = document.querySelector('.best-rated'),
    onSale = document.querySelector('.on-sale'),
    tabsBorderFill = document.querySelector('.tabs-border-fill');

topSellers.addEventListener('click', () => {
    tabsBorderFill.style.width = "100%";
    topSellers.classList.add('active')
    bestRated.classList.remove('active')
    onSale.classList.remove('active')
})
bestRated.addEventListener('click', () => {
    tabsBorderFill.style.width = "calc(100% - 128px)";
    bestRated.classList.add('active')
    topSellers.classList.remove('active')
    onSale.classList.remove('active')
})
onSale.addEventListener('click', () => {
    tabsBorderFill.style.width = "calc(100% - 256px)";
    onSale.classList.add('active')
    topSellers.classList.remove('active')
    bestRated.classList.remove('active')
})

