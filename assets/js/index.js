var gridfolio = new Gridfolio({

    // This is the selector string of the DOM element you want to dump
    // Gridfolio into. You can also just use 'body'.
    container: '#gridfolio--yimin',
  
    // Here are all your configurable options
    options: {
  
      // Fancy! Adds an 'is-animated' class to blocks as they come into view.
      // I've given you a basic fade/slide-in effect, but this is set up so
      // you can add whatever CSS craziness you want.
      animateIntoView: true,
  
      // Breakpoints are mobile first.
      breakpoints: [
  
        // That means the grid is 1 block wide when the broswer's width
        // ranges from 0px wide to 500px wide
        { minWidth: 0, gridWidth: 1 },
        // 3 blocks wide from 500px to 900px browser width
        { minWidth: 500, gridWidth: 2 },
        // and so on
        { minWidth: 900, gridWidth: 3 },
        // and so forth.
        { minWidth: 1300, gridWidth: 4 }
      ],
  
      // Want the font sizes to scale with the browser? Yeah, we fabulous.
      scaleFonts: true,
  
      // Pop in a theme! All this does is add [data-themee='warhol'] to
      // your .gridfolio element, so it WON'T HAVE AN EFFECT unless you also
      // include the corresponding CSS file. See the 'Special Features' section.
      theme: 'warhol'
    },
  
    // Okay, this is where your actual data lives. All fields are optional.
    blocks: [
      {
        title: '政治庇护',
        description: '您可以来到美国为您和您的家人争取更好的生活。',
  
        // Whatever you enter here gets tacked on to the 'gridfolio--block' classname.
        classname: 'any-additional-classes-this-block-should-have'
      },
      {
        title: 'Second Project'
        // etc., etc.
      }
    ]
  })