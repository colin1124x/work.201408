<div id="xx">
    <div class="lists">
        <div>a1</div>
        <div>a2</div>
        <div>a3</div>
        <div>a4</div>
        <div>a5</div>
        <div>a6</div>
        <div>a7</div>
    </div>

    <textarea></textarea>
    <button class="click">click me</button>
    <button class="reset">reset</button>

</div>
<style>
    .lists {
        width: 100px;
        float: left;
    }
    textarea {
        width: 300px;
        height: 100px;
    }
</style>
<script src="/packages/jquery/dist/jquery.min.js"></script>
<script>
    (function(factory){
        self.test = factory($);
    })(function(){

        return function($view, items){
            var $lists = $view.find('.lists'),
                $text = $view.find('textarea'),
                clicked;

            $view.find('button.reset').on('click', function(){
                $text.val(items.join(':\n')+':');
                clicked = false;
            }).click();

            $view.find('button.click').on('click', function(){
                var arr = [],
                    val;

                if (clicked) {
                    return;
                }

                $lists.find('> *').each(function(i){
                    arr.push($(this).text());
                });

                val = $text.val().replace(/^(.+):.*$/mg, function(txt, $1){
                    var n = (arr.length ?
                            arr.splice(Math.floor(Math.random() * arr.length), 1) :
                            '');

                    return $1 + ': ' + n;
                });

                $text.val(val);

                clicked = true;
            });
        };
    });

    test($('#xx'), ['b1', 'b2', 'b3']);

</script>