class State {
    // For toggling the state with one button (on|off, 0|1)
    static toggleState(elem, one, two) {
      elem.setAttribute('data-state', elem.getAttribute('data-state') === one ? two : one)
    } // example: toggleState('.nav ul', 'closed', 'open')
  
    static setState(elem, state) {
      // var elem = document.querySelector(elem)
      if (elem.getAttribute('data-state') !== state ) {
        elem.setAttribute('data-state', state)
      }
    } // example: setState('.nav ul', 'show')
  }
  
  
  var scrollElementToggle = (
    elementToggle = null,
    elementArea = null,
    scrolledToTopCallback = null,
    scrolledDownCallback = null,
    scrolledPastElemCallback = null,
    scrolledUpAboveElemCallback = null,
    scrolledUpCallback = null
  ) => {
  
    // We need to position the header above the window before we make it fixed so that
    // it can transition down
  
    let didScroll
    let lastScrollTop = 0
    const delta = 5
    let articleHeight = document.querySelector(elementArea).offsetHeight
  
    window.addEventListener("scroll",
      (event) => { didScroll = true }
    )
  
    setInterval(function() {
     if (didScroll) {
        hasScrolled()
        didScroll = false
     }
    }, 250)
  
    var hasScrolled = () => {
      let st = window.pageYOffset
      let header = document.querySelector('header')
      let body = document.querySelector('body')
  
      // Make surce they scroll more than delta
      if(Math.abs(lastScrollTop - st) <= delta)
        return
  
      // Scrolled to the top
      if(st == 0) {    
       if (scrolledToTopCallback !== null) {
         scrolledToTopCallback(elementToggle)
       }
  
      // Scroll Down. So hide for better UX (reading)
      } else if (st > lastScrollTop && st > 0) {    
        if (scrolledDownCallback !== null) {
          scrolledDownCallback(elementToggle)
        }
  
        // Have we scrolled past the ""?
        if(st > articleHeight) {      
          if (scrolledPastElemCallback !== null) {
            scrolledPastElemCallback(elementToggle)
          }
        }
  
      // Scroll Up
      } else {    
  
        // If we're above the Elem Passed
        if(st < articleHeight) {      
          if (scrolledUpAboveElemCallback !== null) {
            scrolledUpAboveElemCallback(elementToggle)
          }
        } else {
          if (scrolledUpCallback !== null) {
            scrolledUpCallback(elementToggle)
          }
        }
      }
      lastScrollTop = st
    }
  }
  
  
  scrollElementToggle(  
    document.getElementById('primaryMenu'),
    '.site-header',
    (elementToggle) => { State.setState(elementToggle, '') }, // scrolledToTopCallback
    null, // scrolledDownCallback
    (elementToggle) => { State.setState(elementToggle, 'hide') }, // scrolledPastElemCallback
    (elementToggle) => { State.setState(elementToggle, '') }, // scrolledUpAboveElemCallback
    (elementToggle) => { State.setState(elementToggle, 'show') }, // scrolledUpCallback
  )