(function(){
    var el = wp.element.createElement;
    var registerBlockType = wp.blocks.registerBlockType;
    var PlainText = wp. editor.PlainText;

    registerBlockType( 'hwb/block', {
        title: 'HWB Block',
        category: 'common',

        attributes: {
            text: {
                source: 'children',
                selector: 'p',
                deafult: ''
            }
        },

        edit: function( props ){
            console.log("Edit", props);
            return el(
                PlainText,
                { 
                    className: 'hwb-block',
                    onChange: function(value){
                        props.setAttributes({ text: value});
                    },
                    value: props.attributes.text,
                },
            )
        },

        save: function( props ){
            console.log("Save", props);
            return el(
                'p',
                { className: 'hwb-block'},
                props.attributes.text
            )
        },
    });
})();