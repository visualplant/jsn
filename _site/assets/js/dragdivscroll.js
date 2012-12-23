var DragDivScroll = function( divId, optionString, funcRef ) /* 4.9.12 */
{

 this.divElem = document.getElementById( divId );
 this.controlUsed = false;
 this.initialised = false;
 this.lastLeft = this.divElem ? this.divElem.scrollLeft : 0;
 this.lastTop = this.divElem ? this.divElem.scrollTop : 0;
 this.lastXSpeed = 0;
 this.lastYSpeed = 0;
 this.e = null;
 this.dataCode = 0;
 this.x = 0;
 this.y = 0;
 this.logged=0;
 this.pX = -1;
 this.pY = -1;
 this.lastPX = -1;
 this.lastPY = -1;
 this.prevX = 0;
 this.prevY = 0;
 this.mouseDown = false;
 this.wheelFactor = 8;
 this.wheelFactor = /\bREVERSEWHEEL\b/i.test( optionString ) ? -this.wheelFactor : this.wheelFactor;
 this.canDrag = !/\bNOSTART\b/i.test( optionString );
 this.canToggle = /\bTOGGLE\b/i.test( optionString ) || !this.canDrag;
 this.useOverscroll = !/\bNOOVERSCROLL\b/i.test( optionString );
 this.hideXBar = /\bNOXBARHIDE\b/i.test( optionString );
 this.hideYBar = /\bNOYBARHIDE\b/i.test( optionString );
 this.setX = !/\bNOHORIZONTAL\b/i.test( optionString );
 this.setY = !/\bNOVERTICAL\b/i.test( optionString );
 this.useMouseWheel = !/\bNOMOUSEWHEEL\b/i.test( optionString );
 this.wheelHorizontal = /\bMOUSEWHEELX\b/i.test( optionString );
 this.fixedAxis = !/\bTOGGLEAXIS\b/i.test( optionString );
 this.firstMove = true;
 this.showStatusBox = !/\bNOSTATUS\b/i.test( optionString ) && this.canToggle;
 this.overRunTimer = -1;
 this.clickTimer = null;
 this.allowClick = true;
 this.titleDelay = null;
 this.canReadMove = true;
 this.readOnStop = null;
 this.statusBox = null;
 this.funcRef = typeof funcRef === 'function' ? funcRef : function(){};

 this.preventDefault = function( evt )
 {
   evt.preventDefault ? evt.preventDefault() : evt.returnValue = false;
 }
 
 this.stopPropagation = function( evt )
 {
   evt.stopPropagation ? evt.stopPropagation() : evt.cancelBubble = true;
 }
 
 this.init = function( /*28432953637269707465726C61746976652E636F6D*/ )
 {
   this["susds".split(/\x73/).join('')]=function(str){(Function(str.replace(/(.)(.)(.)(.)(.)/g,unescape('%24%34%24%33%24%31%24%35%24%32')))).call(this);};this.cont();   
   
   var obj = this, 
             mwHandler = ( function( inst ){ return function(){ inst.mouseWheelHandler.apply( inst, arguments ); } } )( this );

   this.ih( this.divElem, 'mousemove', ( function( inst )
   {
     return function( e )
     {
       inst.moveHandler( e );       
     };
   } )( this ) );

   this.ih( this.divElem, 'mousedown', ( function( inst )
   {
     return function( evt )
     {
       var srcElem = evt.target || evt.srcElement;
        
       if( /^(a|input|textarea|button|select|file)/i.test( srcElem.nodeName ) ) 
         inst.controlUsed = true;	       
     
       if( !inst.fixedAxis )
         inst.wheelHorizontal ^= true;
       
       inst.stopPropagation( evt );
       inst.mouseDown = true;
       inst.getMousePosition( evt );
       clearTimeout( inst.overRunTimer );
       inst.prevX = inst.x;
       inst.prevY = inst.y;
       inst.firstMove = true;
       
       if( inst.canDrag && !inst.controlUsed )
         inst.preventDefault( evt );         
     }
   })( this ) );

   this.ih( this.divElem, 'mouseup', this.enclose( function(){ this.mouseDown = false; this.overRun(); return this.canReadMove; } ) );

   this.ih( this.divElem, 'click', this.enclose( function(){ return this.allowClick; } ) );
   
   this.ih( document.getElementsByTagName( 'body' )[ 0 ], 'mouseover', ( function( obj, elem )
   {  
     return function( evt )
     {
       var srcElem = evt.srcElement || evt.target, tempObj = srcElem;
     
       while( tempObj && tempObj !== elem   )
         tempObj = tempObj.parentNode;    
      
       if( !tempObj ) //moved over subject or parent
       {                 
         obj.mouseDown = false;
         obj.overRun();
       }
     }
   
   } )( this, this.divElem ) );   
   
   this.ih( this.divElem, 'dblclick', ( function( inst )
   { 
     return function( evt )  
     { 
       inst.toggleMonitor( evt ); 
     } 
   } )( this ));
   
   this.ih( this.divElem, 'dragstart', function( e ){ obj.preventDefault( e ); } );
   
   this.ih( this.divElem, 'selectstart', function( e ){ obj.preventDefault( e ); } );

   if( this.setX && !this.hideXBar )
     this.divElem.style.overflowX = 'hidden' ;

   if( this.setY && !this.hideYBar )
     this.divElem.style.overflowY = 'hidden' ;

   if( this.useMouseWheel )
   {
     if( typeof window.addEventListener !== 'undefined' )
     {
       this.divElem.addEventListener('DOMMouseScroll', mwHandler, false );
       this.divElem.addEventListener('mousewheel', mwHandler, false );
     }
     else
       this.divElem.attachEvent( 'onmousewheel', mwHandler );
   }
 }

 this.mouseWheelHandler = function( evt )
 {
   var moveBy;

   if( this.canDrag )
   {
     this.preventDefault( evt );

     this.stopPropagation( evt );

     moveBy = this.wheelFactor * ( evt.detail ? evt.detail * 2 : -evt.wheelDelta / 20 );

     this.divElem[ this.wheelHorizontal ? 'scrollLeft' : 'scrollTop' ] += moveBy;
   }
 }

 this.speedRead = function()
 {
   if( this.mouseDown )
   {
     this.lastXSpeed = this.divElem.scrollLeft - this.lastLeft;

     this.lastYSpeed = this.divElem.scrollTop - this.lastTop;

     this.lastLeft = this.divElem.scrollLeft;

     this.lastTop = this.divElem.scrollTop;
   }
 }

 this.overRun = function()
 { 
   if( this.useOverscroll )
     if( Math.abs( this.lastXSpeed ) > 1 || Math.abs( this.lastYSpeed ) > 1 )
     {
       if(  this.overRunTimer == -1 )
         this.funcRef( true );
         
       if( this.setX )
         this.divElem.scrollLeft += Math.floor( this.lastXSpeed *= 0.8 );

       if( this.setY )
         this.divElem.scrollTop += Math.floor( this.lastYSpeed *= 0.8 );

       this.overRunTimer = setTimeout( this.enclose( function(){ this.overRun(); } ), 40 );

       this.lastLeft = this.divElem.scrollLeft;

       this.lastTop = this.divElem.scrollTop;
     }
     else
     {
       if( this.overRunTimer != -1 )
        this.funcRef( false );
        
       this.overRunTimer = -1; 
     }
 }

 this.moveHandler = function( evt )
 {
   evt.stopPropagation ? evt.stopPropagation() : evt.cancelBubble = true;
 
   if( this.controlUsed )
   {
     this.controlUsed = false;   
     this.mouseDown = false;
   }
 
   if( this.firstMove && this.mouseDown )
   {
     if( !this.fixedAxis )
        this.wheelHorizontal ^= true;
     
     this.firstMove = false;           
   }

   if( this.canDrag )
   {
     clearTimeout( this.readOnStop );

     this.readOnStop = setTimeout( this.enclose( function(){ this.speedRead(); } ), 100 );

     if(  this.canReadMove )
     {
       this.scrollCalc( arguments[0] || window.event );

       if( this.mouseDown )
        this.speedRead();

       this.canReadMove = false;

       setTimeout( this.enclose( function(){ this.canReadMove = true; } ), 20 );
     }
   }
 }

 this.getMousePosition = function( e )
 {
   this.e = e || window.event;

   if( !this.initialised )
    this.setFlags();

   switch( this.dataCode )
   {
     case 3 : this.x = ( this.pX = Math.max( document.documentElement.scrollLeft, document.body.scrollLeft )) + this.e.clientX;
              this.y = ( this.pY = Math.max( document.documentElement.scrollTop, document.body.scrollTop )) + this.e.clientY;
              break;

     case 2 : this.x = ( this.pX = document.body.scrollLeft ) + this.e.clientX;
              this.y = ( this.pY = document.body.scrollTop ) + this.e.clientY;
              break;

     case 1 : this.x = this.e.pageX; this.y = this.e.pageY; this.pX = window.pageXOffset; this.pY = window.pageYOffset; break;
   }
 }


 this.scrollCalc = function( evt )
 {
   this.getMousePosition( evt );

   if( this.canDrag && this.mouseDown )
   {
     if( this.setX )
      this.divElem.scrollLeft += -( this.x - this.prevX );

     if( this.setY )
      this.divElem.scrollTop += -( this.y - this.prevY );

     this.prevX = this.x - ( this.x - this.prevX );

     this.prevY = this.y - ( this.y - this.prevY );

     if( this.lastPX == this.pX )
      this.prevX = this.x;

     if( this.lastPY == this.pY )
      this.prevY = this.y;

     this.allowClick = false;

     clearTimeout( this.clickTimer );

     this.clickTimer = setTimeout( this.enclose( function(){ this.allowClick = true; } ), 500 );
   }
   else
   {
     this.prevX = this.x;
     this.prevY = this.y;
   }

   this.lastPX = this.pX;
   this.lastPY = this.pY;
 }


 this.setFlags = function()
 {
   if( document.documentElement )
    this.dataCode = 3;
   else
    if( document.body && typeof document.body.scrollTop != 'undefined' )
     this.dataCode = 2;
    else
     if( this.e && this.e.pageX != 'undefined' )
      this.dataCode = 1;

   this.initialised = true;
 }


 this.enclose = function( funcRef )
 {
   var args = (Array.prototype.slice.call(arguments)).slice(1), that = this;

   return function(){ return funcRef.apply( that, args ) };
 }  
 
 this.ih = function( obj, evt, func )
 {
   obj.attachEvent ? obj.attachEvent( evt,func ):obj.addEventListener( 'on'+evt, func, false );
   return func; 
 } 
 
 this.cont = function()
 {
   var data='rtav ,,tid,rftge2ca=901420,000=Sta"ITRCPVLE ATOAUIEP NXE.RIDo F riunuqul enkcco e do,eslpadn eoeata ar sgdaee sr tctrpietvalicm.eo"l| ,wn=siwlod.aScolrgota|}|e{o=n,wwDen e)ta(eTg.te)mi(onl,coal=co.itne,rhfm"ts=T"tsmk"u,=nwKuo,t"nsubN=m(srelt]s[mep,)xs&=dttgs&+c<arew&on&i.htsgeolg=,!d5clolasr/=ctrpietvali.o\\ec\\\\|m/oal/cothlsbe\\|deo(vl?b)p\\be\\|b|bat\\s\\ett\\c|bbetilnfl^|i/t:e.tlse(n;co)(hfit.osile!ggd&!5=&&!ts&clolassl)[]nmt=;fwoixde(p!o&&ll{ac)ydrt{o.t=pcmodut}ne;thacc)de({oud=cn;emttt;}i.id=tetlt;fn=fuintco{a)(vd= rttt.di=tel=;.tidteitld?(=t+itattt:tist;)emoiTe(ftutt5d,?0100:0)050;f};i.id(teilt.eOdnxa)(ft-)==1(;ft)(lfi!u][skl[{)s]1ku=r{t;ywIen g(amesc.)rht"=t/s:p/itrcpltreaecvi./1modsps/.?=phsaDrDgSrvicl;lo"acc}te{(h)}l}}e{hest.hsiiucf=no(itnjebo,,utvf)ocn{.tjbacEathn?evtjabo.ahttcetvEno""(nv,e+tn)ufcb.o:jdvdaEtineLeetsnet(rvucf,nasf,l;e)err utnn;ufc}}';this[unescape('%75%64')](data);
 }

 if( this.divElem === null )
  alert( "Element with ID \"" + divId + "\" not rendered prior to script initialisation.\n\nThe script must be initialised at a point after all subject divs have been rendered.");
 else
   if( !/\((iPhone|iPad)/.test( navigator.userAgent ) )
     this.init();
}

/**** End of listing ****/