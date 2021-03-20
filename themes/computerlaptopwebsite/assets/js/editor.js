// console.log( "I'm loaded!" );


// changing style for quotes
wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote'
} );

// unregistering block styles here
wp.domReady( function() {
    // wp.blocks.unregisterBlockStyle( 'core/quote', 'default' );
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
} );

// I am not using any stuff like this in my theme