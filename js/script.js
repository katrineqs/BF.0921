const zoomMountainLeft = document.querySelector('js-zoom-mountain-left')
const zoomMountainRight = document.querySelector('js-zoom-mountain-Right')
const zoomText = document.querySelector('js-zoom-text')

document. addEventListener('scroll', () => {
    const scroll = window.pageYOffset;

    zoomMountaionLeft.style.width = (100 + scroll/5) + '%';
    zoomMountaionLeft.style.left = - scroll/5) + '%';
    zoomMountaionLeft.style.bottom = - scroll/5) + '%';

    zoomMountaionRight.style.width = (100 + scroll/5) + '%';
    zoomMountaionRight.style.right = - scroll/5) + '%';
    zoomMountaionRight.style.bottom = - scroll/5) + '%';

    zoomText.style.bottom = scroll/7 + '%';
})