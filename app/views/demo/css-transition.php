<div class="item">
    <div>ABC</div>
</div>

<style>
    .item > div:first-child {
        transition: all 450ms ease-in-out;
    }

    .item > div:first-child {
        transform: rotateY(-90deg) translate3d(-240px, 0px, 240px) ;
        opacity: 0;
    }

    .item:hover > div:first-child {
        transform: rotateY(0deg) translate3d(0px, 0px, 0px);
        opacity: 1;
    }

    .item {
        perspective: 800px;
        perspective-origin: 50% 50%;

        position: relative;
        width: 480px;
        height: 480px;
        border: 1px solid #666;
    }

    .item > div {
        width: 480px;
        height: 480px;
        background: rgba(0,0,0,0.8);
        color: #FFF;
        font: 24px/480px Arial;
        text-align: center;
    }

</style>