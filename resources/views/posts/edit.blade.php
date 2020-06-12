@extends('layouts.app')

@section('content')

<style type="text/css">
    /* =============================================================
 * BASE STYLES
 * ============================================================*/
    .datepicker {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        overflow: hidden;
        position: absolute;
        width: 260px;
        z-index: 1;
    }

    .datepicker__inner {
        overflow: hidden;
    }

    .datepicker__month {
        border-collapse: collapse;
        text-align: center;
        width: 100%;
    }

    .datepicker__month--month2 {
        display: none;
    }

    .datepicker__month-day--valid {
        cursor: pointer;
    }

    .datepicker__month-day--lastMonth,
    .datepicker__month-day--nextMonth {
        visibility: hidden;
    }

    .datepicker__month-button {
        cursor: pointer;
    }

    .datepicker__info--feedback {
        display: none;
    }

    .datepicker__info--error,
    .datepicker__info--help {
        display: block;
    }

    .datepicker__close-button {
        cursor: pointer;
    }

    .datepicker__tooltip {
        position: absolute;
    }

    /* =============================================================
 * THEME
 * ============================================================*/
    .datepicker {
        background-color: #fff;
        border-radius: 5px;
        -webkit-box-shadow: 8px 8px 40px 5px rgba(0, 0, 0, 0.08);
        box-shadow: 8px 8px 40px 5px rgba(0, 0, 0, 0.08);
        color: #484c55;
        font-family: 'Helvetica', 'Helvetica Neue', 'Arial', sans-serif;
        font-size: 14px;
        line-height: 14px;
    }

    .datepicker__inner {
        padding: 20px;
    }

    .datepicker__month {
        font-size: 12px;
    }

    .datepicker__month-caption {
        border-bottom: 1px solid #dcdcdc;
        height: 2.5em;
        vertical-align: middle;
    }

    .datepicker__month-name {
        text-transform: uppercase;
    }

    .datepicker__week-days {
        height: 2em;
        vertical-align: middle;
    }

    .datepicker__week-name {
        font-size: 11px;
        font-weight: 400;
        text-transform: uppercase;
    }

    .datepicker__month-day {
        -webkit-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-property: color, background-color, border-color;
        transition-property: color, background-color, border-color;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        color: #acb2c1;
        padding: 9px 7px;
    }

    .datepicker__month-day--no-checkin {
        position: relative;
    }

    .datepicker__month-day--no-checkin:after {
        background-color: rgba(255, 0, 0, 0.1);
        bottom: 0;
        content: '';
        display: block;
        left: 0;
        position: absolute;
        right: 50%;
        top: 0;
        z-index: -1;
    }

    .datepicker__month-day--no-checkout {
        position: relative;
    }

    .datepicker__month-day--no-checkout:after {
        background-color: rgba(255, 0, 0, 0.1);
        bottom: 0;
        content: '';
        display: block;
        left: 50%;
        position: absolute;
        right: 0;
        top: 0;
        z-index: -1;
    }

    .datepicker__month-day--invalid {
        color: #e8ebf4;
    }

    .datepicker__month-day--disabled {
        color: #e8ebf4;
        position: relative;
    }

    .datepicker__month-day--disabled:after {
        content: '\00d7';
        left: 50%;
        position: absolute;
        color: red;
        font-size: 16px;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .datepicker__month-day--selected {
        background-color: rgba(116, 107, 253, 0.5);
        color: #fff;
    }

    .datepicker__month-day--selected:after {
        display: none;
    }

    .datepicker__month-day--hovering {
        background-color: rgba(116, 107, 253, 0.3);
        color: #fff;
    }

    .datepicker__month-day--today {
        background-color: #484c55;
        color: #fff;
    }

    .datepicker__month-day--first-day-selected,
    .datepicker__month-day--last-day-selected {
        background-color: #746bfd;
        color: #fff;
    }

    .datepicker__month-day--last-day-selected:after {
        content: none;
    }

    .datepicker__month-button {
        -webkit-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-property: color, background-color, border-color;
        transition-property: color, background-color, border-color;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        background-color: #d6dae5;
        border-radius: 4px;
        color: #9da6b8;
        display: inline-block;
        padding: 5px 10px;
    }

    .datepicker__month-button:hover {
        background-color: #746bfd;
        color: #fff;
    }

    .datepicker__topbar {
        margin-bottom: 20px;
        position: relative;
    }

    .datepicker__info-text {
        font-size: 13px;
    }

    .datepicker__info--selected {
        font-size: 11px;
        text-transform: uppercase;
    }

    .datepicker__info--selected-label {
        color: #acb2c1;
    }

    .datepicker__info-text--selected-days {
        font-size: 11px;
        font-style: normal;
    }

    .datepicker__info--error {
        color: red;
        font-size: 13px;
        font-style: italic;
    }

    .datepicker__info--help {
        color: #acb2c1;
        font-style: italic;
    }

    .datepicker__close-button {
        -webkit-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-property: color, background-color, border-color;
        transition-property: color, background-color, border-color;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        background-color: #746bfd;
        border-radius: 4px;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        font-size: 10px;
        color: #fff;
        margin-top: 20px;
        padding: 7px 13px;
        text-decoration: none;
        text-shadow: none;
        text-transform: uppercase;
    }

    .datepicker__close-button:hover {
        background-color: #484c55;
        color: #fff;
    }

    .datepicker__tooltip {
        background-color: #ffe684;
        border-radius: 2px;
        font-size: 11px;
        margin-top: -5px;
        padding: 5px 10px;
    }

    .datepicker__tooltip:after {
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 4px solid #ffe684;
        bottom: -4px;
        content: '';
        left: 50%;
        margin-left: -4px;
        position: absolute;
    }

    @media (min-width: 320px) {
        .datepicker {
            width: 300px;
        }
    }

    @media (min-width: 480px) {
        .datepicker {
            width: 460px;
        }

        .datepicker__months {
            overflow: hidden;
        }

        .datepicker__month {
            width: 200px;
        }

        .datepicker__month--month1 {
            float: left;
        }

        .datepicker__month--month2 {
            display: table;
            float: right;
        }

        .datepicker__month-button--disabled {
            visibility: hidden;
        }

        .datepicker__months {
            position: relative;
        }

        .datepicker__months:before {
            background: #dcdcdc;
            bottom: 0;
            content: '';
            display: block;
            left: 50%;
            position: absolute;
            top: 0;
            width: 1px;
        }
    }

    @media (min-width: 768px) {
        .datepicker {
            width: 560px;
        }

        .datepicker__month {
            width: 240px;
        }

        .datepicker__close-button {
            margin-top: 0;
            position: absolute;
            right: 0;
            top: 0;
        }
    }
</style>

<div class="container pt-4">
    <h1 class="contact-title">Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div> 
        <div class="form-froup pb-3">
            {{Form::file('cover_image')}}    
        </div>  
         @if (Auth::user()->is_business == 1)
            <hr>
            <h2 class="contact-title">Reservation card details</h2>
            <div class="form-group">
                <div class="demo__input" id="demo3">
                    {{Form::label('input', 'Checkin - Checkout dates')}}
                    {{Form::text('input',$post->checkin_date.' - '.$post->checkout_date, ['class' => 'form-control col-sm-4', 'placeholder' => 'dd-mm-yyyy - dd-mm-yyyy'])}}
                  
                </div>
            </div>

            <div class="form-group">
                {{Form::label('adults', 'Adults/per room')}}
                {{Form::text('adults', $post->adults, ['class' => 'form-control col-sm-4', 'placeholder' => 'Number of adults'])}}
            </div>

            <div class="form-group">
                {{Form::label('children', 'Children/per room')}}
                {{Form::text('children', $post->kids, ['class' => 'form-control col-sm-4', 'placeholder' => 'Number of children'])}}
            </div>

            <div class="form-group">
                {{Form::label('rooms', 'Rooms available')}}
                {{Form::text('rooms', $post->rooms, ['class' => 'form-control col-sm-4', 'placeholder' => 'Number of rooms available'])}}
            </div>

            <div class="form-group">
                {{Form::label('price', 'Reservation Price')}}
                {{Form::text('price', $post->price, ['class' => 'form-control col-sm-4', 'placeholder' => 'Enter a price'])}}
            </div>
            
        @endif
        {{Form::hidden('_method', 'PUT')}} 
        {{Form::submit('Submit', ['class' => 'genric-btn info'])}}
        <br> <br>
        <br> <br>
        <br> <br>
    {!! Form::close() !!}

    <!-- JS here -->


<script type="text/javascript">
    !function(t,n){"object"==typeof exports&&"undefined"!=typeof module?n(exports):"function"==typeof define&&define.amd?define(["exports"],n):n(t.fecha={})}(this,function(t){"use strict";var n=/d{1,4}|M{1,4}|YY(?:YY)?|S{1,3}|Do|ZZ|Z|([HhMsDm])\1?|[aA]|"[^"]*"|'[^']*'/g,e="[^\\s]+",r=/\[([^]*?)\]/gm;function o(t,n){for(var e=[],r=0,o=t.length;r<o;r++)e.push(t[r].substr(0,n));return e}var u=function(t){return function(n,e){var r=e[t].map(function(t){return t.toLowerCase()}).indexOf(n.toLowerCase());return r>-1?r:null}};function a(t){for(var n=[],e=1;e<arguments.length;e++)n[e-1]=arguments[e];for(var r=0,o=n;r<o.length;r++){var u=o[r];for(var a in u)t[a]=u[a]}return t}var i=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],d=["January","February","March","April","May","June","July","August","September","October","November","December"],s=o(d,3),f={dayNamesShort:o(i,3),dayNames:i,monthNamesShort:s,monthNames:d,amPm:["am","pm"],DoFn:function(t){return t+["th","st","nd","rd"][t%10>3?0:(t-t%10!=10?1:0)*t%10]}},m=a({},f),c=function(t){return m=a(m,t)},l=function(t){return t.replace(/[|\\{()[^$+*?.-]/g,"\\$&")},h=function(t,n){for(void 0===n&&(n=2),t=String(t);t.length<n;)t="0"+t;return t},g={D:function(t){return String(t.getDate())},DD:function(t){return h(t.getDate())},Do:function(t,n){return n.DoFn(t.getDate())},d:function(t){return String(t.getDay())},dd:function(t){return h(t.getDay())},ddd:function(t,n){return n.dayNamesShort[t.getDay()]},dddd:function(t,n){return n.dayNames[t.getDay()]},M:function(t){return String(t.getMonth()+1)},MM:function(t){return h(t.getMonth()+1)},MMM:function(t,n){return n.monthNamesShort[t.getMonth()]},MMMM:function(t,n){return n.monthNames[t.getMonth()]},YY:function(t){return h(String(t.getFullYear()),4).substr(2)},YYYY:function(t){return h(t.getFullYear(),4)},h:function(t){return String(t.getHours()%12||12)},hh:function(t){return h(t.getHours()%12||12)},H:function(t){return String(t.getHours())},HH:function(t){return h(t.getHours())},m:function(t){return String(t.getMinutes())},mm:function(t){return h(t.getMinutes())},s:function(t){return String(t.getSeconds())},ss:function(t){return h(t.getSeconds())},S:function(t){return String(Math.round(t.getMilliseconds()/100))},SS:function(t){return h(Math.round(t.getMilliseconds()/10),2)},SSS:function(t){return h(t.getMilliseconds(),3)},a:function(t,n){return t.getHours()<12?n.amPm[0]:n.amPm[1]},A:function(t,n){return t.getHours()<12?n.amPm[0].toUpperCase():n.amPm[1].toUpperCase()},ZZ:function(t){var n=t.getTimezoneOffset();return(n>0?"-":"+")+h(100*Math.floor(Math.abs(n)/60)+Math.abs(n)%60,4)},Z:function(t){var n=t.getTimezoneOffset();return(n>0?"-":"+")+h(Math.floor(Math.abs(n)/60),2)+":"+h(Math.abs(n)%60,2)}},M=function(t){return+t-1},D=[null,"[1-9]\\d?"],Y=[null,e],p=["isPm",e,function(t,n){var e=t.toLowerCase();return e===n.amPm[0]?0:e===n.amPm[1]?1:null}],y=["timezoneOffset","[^\\s]*?[\\+\\-]\\d\\d:?\\d\\d|[^\\s]*?Z?",function(t){var n=(t+"").match(/([+-]|\d\d)/gi);if(n){var e=60*+n[1]+parseInt(n[2],10);return"+"===n[0]?e:-e}return 0}],S={D:["day","[1-9]\\d?"],DD:["day","\\d\\d"],Do:["day","[1-9]\\d?"+e,function(t){return parseInt(t,10)}],M:["month","[1-9]\\d?",M],MM:["month","\\d\\d",M],YY:["year","\\d\\d",function(t){var n=+(""+(new Date).getFullYear()).substr(0,2);return+(""+(+t>68?n-1:n)+t)}],h:["hour","[1-9]\\d?",void 0,"isPm"],hh:["hour","\\d\\d",void 0,"isPm"],H:["hour","[1-9]\\d?"],HH:["hour","\\d\\d"],m:["minute","[1-9]\\d?"],mm:["minute","\\d\\d"],s:["second","[1-9]\\d?"],ss:["second","\\d\\d"],YYYY:["year","\\d{4}"],S:["millisecond","\\d",function(t){return 100*+t}],SS:["millisecond","\\d\\d",function(t){return 10*+t}],SSS:["millisecond","\\d{3}"],d:D,dd:D,ddd:Y,dddd:Y,MMM:["month",e,u("monthNamesShort")],MMMM:["month",e,u("monthNames")],a:p,A:p,ZZ:y,Z:y},v={default:"ddd MMM DD YYYY HH:mm:ss",shortDate:"M/D/YY",mediumDate:"MMM D, YYYY",longDate:"MMMM D, YYYY",fullDate:"dddd, MMMM D, YYYY",isoDate:"YYYY-MM-DD",isoDateTime:"YYYY-MM-DDTHH:mm:ssZ",shortTime:"HH:mm",mediumTime:"HH:mm:ss",longTime:"HH:mm:ss.SSS"},H=function(t){return a(v,t)},b=function(t,e,o){if(void 0===e&&(e=v.default),void 0===o&&(o={}),"number"==typeof t&&(t=new Date(t)),"[object Date]"!==Object.prototype.toString.call(t)||isNaN(t.getTime()))throw new Error("Invalid Date pass to format");var u=[];e=(e=v[e]||e).replace(r,function(t,n){return u.push(n),"@@@"});var i=a(a({},m),o);return(e=e.replace(n,function(n){return g[n](t,i)})).replace(/@@@/g,function(){return u.shift()})};function w(t,e,o){if(void 0===o&&(o={}),"string"!=typeof e)throw new Error("Invalid format in fecha parse");if(e=v[e]||e,t.length>1e3)return null;var u={year:(new Date).getFullYear(),month:0,day:1,hour:0,minute:0,second:0,millisecond:0,isPm:null,timezoneOffset:null},i=[],d=[],s=e.replace(r,function(t,n){return d.push(l(n)),"@@@"}),f={},c={};s=l(s).replace(n,function(t){var n=S[t],e=n[0],r=n[1],o=n[3];if(f[e])throw new Error("Invalid format. "+e+" specified twice in format");return f[e]=!0,o&&(c[o]=!0),i.push(n),"("+r+")"}),Object.keys(c).forEach(function(t){if(!f[t])throw new Error("Invalid format. "+t+" is required in specified format")}),s=s.replace(/@@@/g,function(){return d.shift()});var h=t.match(new RegExp(s,"i"));if(!h)return null;for(var g=a(a({},m),o),M=1;M<h.length;M++){var D=i[M-1],Y=D[0],p=D[2],y=p?p(h[M],g):+h[M];if(null==y)return null;u[Y]=y}1===u.isPm&&null!=u.hour&&12!=+u.hour?u.hour=+u.hour+12:0===u.isPm&&12==+u.hour&&(u.hour=0);for(var H=new Date(u.year,u.month,u.day,u.hour,u.minute,u.second,u.millisecond),b=[["month","getMonth"],["day","getDate"],["hour","getHours"],["minute","getMinutes"],["second","getSeconds"]],w=(M=0,b.length);M<w;M++)if(f[b[M][0]]&&u[b[M][0]]!==H[b[M][1]]())return null;return null==u.timezoneOffset?H:new Date(Date.UTC(u.year,u.month,u.day,u.hour,u.minute-u.timezoneOffset,u.second,u.millisecond))}var P={format:b,parse:w,defaultI18n:f,setGlobalDateI18n:c,setGlobalDateMasks:H};t.assign=a,t.default=P,t.format=b,t.parse=w,t.defaultI18n=f,t.setGlobalDateI18n=c,t.setGlobalDateMasks=H,Object.defineProperty(t,"__esModule",{value:!0})});
//# sourceMappingURL=fecha.min.js.map
</script>

<script type="text/javascript">
    /*! hotel-datepicker 4.0.0 - Copyright 2019 Benito Lopez (http://lopezb.com) - https://github.com/benitolopez/hotel-datepicker - MIT */
var HotelDatepicker=function(){"use strict";function a(e,t){this._boundedEventHandlers={},this.id=a.getNewId();var s=t||{};this.format=s.format||"YYYY-MM-DD",this.infoFormat=s.infoFormat||this.format,this.separator=s.separator||" - ",this.startOfWeek=s.startOfWeek||"sunday",this.startDate=s.startDate||new Date,this.endDate=s.endDate||!1,this.minNights=s.minNights||1,this.maxNights=s.maxNights||0,this.selectForward=s.selectForward||!1,this.disabledDates=s.disabledDates||[],this.noCheckInDates=s.noCheckInDates||[],this.noCheckOutDates=s.noCheckOutDates||[],this.disabledDaysOfWeek=s.disabledDaysOfWeek||[],this.enableCheckout=s.enableCheckout||!1,this.preventContainerClose=s.preventContainerClose||!1,this.container=s.container||"",this.animationSpeed=s.animationSpeed||".5s",this.hoveringTooltip=s.hoveringTooltip||!0,this.autoClose=void 0===s.autoClose||s.autoClose,this.showTopbar=void 0===s.showTopbar||s.showTopbar,this.moveBothMonths=s.moveBothMonths||!1,this.i18n=s.i18n||{selected:"Your stay:",night:"Night",nights:"Nights",button:"Close","checkin-disabled":"Check-in disabled","checkout-disabled":"Check-out disabled","day-names-short":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"day-names":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"month-names-short":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"month-names":["January","February","March","April","May","June","July","August","September","October","November","December"],"error-more":"Date range should not be more than 1 night","error-more-plural":"Date range should not be more than %d nights","error-less":"Date range should not be less than 1 night","error-less-plural":"Date range should not be less than %d nights","info-more":"Please select a date range of at least 1 night","info-more-plural":"Please select a date range of at least %d nights","info-range":"Please select a date range between %d and %d nights","info-default":"Please select a date range"},this.getValue=s.getValue||function(){return e.value},this.setValue=s.setValue||function(t){e.value=t},this.onDayClick=void 0!==s.onDayClick&&s.onDayClick,this.onOpenDatepicker=void 0!==s.onOpenDatepicker&&s.onOpenDatepicker,this.onSelectRange=void 0!==s.onSelectRange&&s.onSelectRange,this.input=e,this.init()}var t=0;return a.prototype.addBoundedListener=function(t,e,s,a){t in this._boundedEventHandlers||(this._boundedEventHandlers[t]={}),e in this._boundedEventHandlers[t]||(this._boundedEventHandlers[t][e]=[]);var i=s.bind(this);this._boundedEventHandlers[t][e].push([i,a]),t.addEventListener(e,i,a)},a.prototype.removeAllBoundedListeners=function(t,e){if(t in this._boundedEventHandlers){var s=this._boundedEventHandlers[t];if(e in s)for(var a=s[e],i=a.length;i--;){var n=a[i];t.removeEventListener(e,n[0],n[1])}}},a.getNewId=function(){return++t},a.prototype.setFechaI18n=function(){fecha.setGlobalDateI18n({dayNamesShort:this.i18n["day-names-short"],dayNames:this.i18n["day-names"],monthNamesShort:this.i18n["month-names-short"],monthNames:this.i18n["month-names"]})},a.prototype.getWeekDayNames=function(){var t="";if("monday"===this.startOfWeek){for(var e=0;e<7;e++)t+='<th class="datepicker__week-name">'+this.lang("day-names-short")[(1+e)%7]+"</th>";return t}for(var s=0;s<7;s++)t+='<th class="datepicker__week-name">'+this.lang("day-names-short")[s]+"</th>";return t},a.prototype.getMonthDom=function(t){return document.getElementById(this.getMonthTableId(t))},a.prototype.getMonthName=function(t){return this.lang("month-names")[t]},a.prototype.getDatepickerId=function(){return"datepicker-"+this.generateId()},a.prototype.getMonthTableId=function(t){return"month-"+t+"-"+this.generateId()},a.prototype.getCloseButtonId=function(){return"close-"+this.generateId()},a.prototype.getTooltipId=function(){return"tooltip-"+this.generateId()},a.prototype.getNextMonth=function(t){var e=new Date(t.valueOf());return new Date(e.setMonth(e.getMonth()+1,1))},a.prototype.getPrevMonth=function(t){var e=new Date(t.valueOf());return new Date(e.setMonth(e.getMonth()-1,1))},a.prototype.getDateString=function(t,e){return void 0===e&&(e=this.format),this.setFechaI18n(),fecha.format(t,e)},a.prototype.parseDate=function(t,e){return void 0===e&&(e=this.format),this.setFechaI18n(),fecha.parse(t,e)},a.prototype.init=function(){this.parent=this.container?this.container:this.input.parentElement,this.start=!1,this.end=!1,this.minDays=1<this.minNights?this.minNights+1:2,this.maxDays=0<this.maxNights?this.maxNights+1:0,this.startDate&&"string"==typeof this.startDate&&(this.startDate=this.parseDate(this.startDate)),this.endDate&&"string"==typeof this.endDate&&(this.endDate=this.parseDate(this.endDate)),this.isTouchDevice()&&(this.hoveringTooltip=!1),this.isOpen=!1,this.changed=!1,this.createDom();var t=new Date;this.startDate&&this.compareMonth(t,this.startDate)<0&&(t=new Date(this.startDate.getTime())),this.endDate&&0<this.compareMonth(this.getNextMonth(t),this.endDate)&&(t=new Date(this.getPrevMonth(this.endDate.getTime()))),0<this.disabledDates.length&&this.parseDisabledDates(),this.showMonth(t,1),this.showMonth(this.getNextMonth(t),2),this.topBarDefaultText(),this.addListeners(),this.isFirstDisabledDate=0,this.lastDisabledDate=!1},a.prototype.addListeners=function(){for(var e=this,t=this.datepicker.getElementsByClassName("datepicker__month-button--next"),s=0;s<t.length;s++)t[s].addEventListener("click",function(t){return e.goToNextMonth(t)});for(var a=this.datepicker.getElementsByClassName("datepicker__month-button--prev"),i=0;i<a.length;i++)a[i].addEventListener("click",function(t){return e.goToPreviousMonth(t)});this.addBoundedListener(this.input,"click",function(t){return e.openDatepicker(t)}),this.showTopbar&&document.getElementById(this.getCloseButtonId()).addEventListener("click",function(t){return e.closeDatepicker(t)}),this.datepicker.addEventListener("mouseover",function(t){return e.datepickerHover(t)}),this.datepicker.addEventListener("mouseout",function(t){return e.datepickerMouseOut(t)}),this.addBoundedListener(this.input,"change",function(){return e.checkAndSetDefaultValue()})},a.prototype.generateId=function(){return this.input.id?this.input.id:this.id},a.prototype.createDom=function(){var t=this.createDatepickerDomString();this.parent.insertAdjacentHTML("beforeend",t),this.datepicker=document.getElementById(this.getDatepickerId())},a.prototype.createDatepickerDomString=function(){var t='<div id="'+this.getDatepickerId()+'" style="display:none" class="datepicker datepicker--closed">';t+='<div class="datepicker__inner">',this.showTopbar&&(t+='<div class="datepicker__topbar"><div class="datepicker__info datepicker__info--selected"><span class="datepicker__info datepicker__info--selected-label">'+this.lang("selected")+' </span> <strong class="datepicker__info-text datepicker__info-text--start-day">...</strong> <span class="datepicker__info-text datepicker__info--separator">'+this.separator+'</span> <strong class="datepicker__info-text datepicker__info-text--end-day">...</strong> <em class="datepicker__info-text datepicker__info-text--selected-days">(<span></span>)</em></div><div class="datepicker__info datepicker__info--feedback"></div><button type="button" id="'+this.getCloseButtonId()+'" class="datepicker__close-button">'+this.lang("button")+"</button></div>"),t+='<div class="datepicker__months">';for(var e=1;e<=2;e++)t+='<table id="'+this.getMonthTableId(e)+'" class="datepicker__month datepicker__month--month'+e+'"><thead><tr class="datepicker__month-caption"><th><span class="datepicker__month-button datepicker__month-button--prev" month="'+e+'">&lt;</span></th><th colspan="5" class="datepicker__month-name"></th><th><span class="datepicker__month-button datepicker__month-button--next" month="'+e+'">&gt;</span></th></tr><tr class="datepicker__week-days">'+this.getWeekDayNames(e)+"</tr></thead><tbody></tbody></table>";return t+="</div>",t+='<div style="display:none" id="'+this.getTooltipId()+'" class="datepicker__tooltip"></div>',t+="</div>",t+="</div>"},a.prototype.showMonth=function(t,e){var s=this.getMonthName(t.getMonth()),a=this.getMonthDom(e),i=a.getElementsByClassName("datepicker__month-name")[0],n=a.getElementsByTagName("tbody")[0];i.textContent=s+" "+t.getFullYear(),this.emptyElement(n),n.insertAdjacentHTML("beforeend",this.createMonthDomString(t)),this.updateSelectableRange(),this["month"+e]=t},a.prototype.createMonthDomString=function(t){var e=this,s=[],a="";t.setDate(1);var i=t.getDay(),n=t.getMonth();if(0===i&&"monday"===this.startOfWeek&&(i=7),0<i)for(var o=i;0<o;o--){var r=new Date(t.getTime()-864e5*o),h=e.isValidDate(r.getTime());(e.startDate&&e.compareDay(r,e.startDate)<0||e.endDate&&0<e.compareDay(r,e.endDate))&&(h=!1),s.push({date:r,type:"lastMonth",day:r.getDate(),time:r.getTime(),valid:h})}for(var d=0;d<40;d++){var l=e.addDays(t,d);h=e.isValidDate(l.getTime()),(e.startDate&&e.compareDay(l,e.startDate)<0||e.endDate&&0<e.compareDay(l,e.endDate))&&(h=!1),s.push({date:l,type:l.getMonth()===n?"visibleMonth":"nextMonth",day:l.getDate(),time:l.getTime(),valid:h})}for(var c=0;c<6&&"nextMonth"!==s[7*c].type;c++){a+='<tr class="datepicker__week-row">';for(var p=0;p<7;p++){var m,g,u,y,D=s[7*c+(D="monday"===e.startOfWeek?p+1:p)],f=e.getDateString(D.time)===e.getDateString(new Date),k=e.getDateString(D.time)===e.getDateString(e.startDate),_=!1,v=!1,b=!1,C=!1,M=!1,T=!1;!D.valid&&"visibleMonth"!==D.type||(m=e.getDateString(D.time,"YYYY-MM-DD"),0<e.disabledDates.length&&((g=e.getClosestDates(D.date))[0]&&g[1]&&e.compareDay(D.date,g[0])&&0<e.countDays(g[0],g[1])-2&&(u=e.countDays(g[1],D.date)-1,y=e.countDays(D.date,g[0])-1,(e.selectForward&&u<e.minDays||!e.selectForward&&u<e.minDays&&y<e.minDays)&&(D.valid=!1),!D.valid&&e.enableCheckout&&2==u&&(T=!0)),-1<e.disabledDates.indexOf(m)?(_=!(D.valid=!1),e.isFirstDisabledDate++,e.lastDisabledDate=D.date):e.isFirstDisabledDate=0,D.valid&&e.lastDisabledDate&&0<e.compareDay(D.date,e.lastDisabledDate)&&2===e.countDays(D.date,e.lastDisabledDate)&&(M=!0)),0<e.disabledDaysOfWeek.length&&-1<e.disabledDaysOfWeek.indexOf(fecha.format(D.time,"dddd"))&&(C=!(D.valid=!1)),0<e.noCheckInDates.length&&-1<e.noCheckInDates.indexOf(m)&&(M=!(v=!0)),0<e.noCheckOutDates.length&&-1<e.noCheckOutDates.indexOf(m)&&(b=!0));var w=["datepicker__month-day--"+D.type,"datepicker__month-day--"+(D.valid?"valid":"invalid"),f?"datepicker__month-day--today":"",_?"datepicker__month-day--disabled":"",_&&e.enableCheckout&&1===e.isFirstDisabledDate?"datepicker__month-day--checkout-enabled":"",T?"datepicker__month-day--before-disabled-date":"",k||M?"datepicker__month-day--checkin-only":"",v?"datepicker__month-day--no-checkin":"",b?"datepicker__month-day--no-checkout":"",C?"datepicker__month-day--day-of-week-disabled":""],S="";v&&(S=e.i18n["checkin-disabled"]),b&&(S&&(S+=". "),S+=e.i18n["checkout-disabled"]);var N={time:D.time,class:w.join(" ")};S&&(N.title=S),a+='<td class="datepicker__month-day '+N.class+'" '+e.printAttributes(N)+">"+D.day+"</td>"}a+="</tr>"}return a},a.prototype.openDatepicker=function(){var e=this;this.isOpen||(this.removeClass(this.datepicker,"datepicker--closed"),this.addClass(this.datepicker,"datepicker--open"),this.checkAndSetDefaultValue(),this.slideDown(this.datepicker,this.animationSpeed),this.isOpen=!0,this.showSelectedDays(),this.disableNextPrevButtons(),this.addBoundedListener(document,"click",function(t){return e.documentClick(t)}),this.onOpenDatepicker&&this.onOpenDatepicker())},a.prototype.closeDatepicker=function(){var t;this.isOpen&&(this.removeClass(this.datepicker,"datepicker--open"),this.addClass(this.datepicker,"datepicker--closed"),this.slideUp(this.datepicker,this.animationSpeed),this.isOpen=!1,(t=document.createEvent("Event")).initEvent("afterClose",!0,!0),this.input.dispatchEvent(t),this.removeAllBoundedListeners(document,"click"))},a.prototype.autoclose=function(){this.autoClose&&this.changed&&this.isOpen&&this.start&&this.end&&this.closeDatepicker()},a.prototype.documentClick=function(t){this.parent.contains(t.target)||t.target===this.input?"td"===t.target.tagName.toLowerCase()&&this.dayClicked(t.target):this.preventContainerClose||this.closeDatepicker()},a.prototype.datepickerHover=function(t){t.target.tagName&&"td"===t.target.tagName.toLowerCase()&&this.dayHovering(t.target)},a.prototype.datepickerMouseOut=function(t){t.target.tagName&&"td"===t.target.tagName.toLowerCase()&&(document.getElementById(this.getTooltipId()).style.display="none")},a.prototype.checkAndSetDefaultValue=function(){var t,e=this.getValue(),s=e?e.split(this.separator):"";s&&2<=s.length?(t=this.format,this.changed=!1,this.setDateRange(this.parseDate(s[0],t),this.parseDate(s[1],t)),this.changed=!0):this.showTopbar&&(this.datepicker.getElementsByClassName("datepicker__info--selected")[0].style.display="none")},a.prototype.setDateRange=function(t,e){var s;t.getTime()>e.getTime()&&(s=e,e=t,t=s,s=null);var a=!0;if((this.startDate&&this.compareDay(t,this.startDate)<0||this.endDate&&0<this.compareDay(e,this.endDate))&&(a=!1),!a)return this.showMonth(this.startDate,1),this.showMonth(this.getNextMonth(this.startDate),2),this.showSelectedDays(),void this.disableNextPrevButtons();t.setTime(t.getTime()+432e5),e.setTime(e.getTime()+432e5),this.start=t.getTime(),this.end=e.getTime(),0<this.compareDay(t,e)&&0===this.compareMonth(t,e)&&(e=this.getNextMonth(t)),0===this.compareMonth(t,e)&&(e=this.getNextMonth(t)),this.showMonth(t,1),this.showMonth(e,2),this.showSelectedDays(),this.disableNextPrevButtons(),this.checkSelection(),this.showSelectedInfo(),this.autoclose()},a.prototype.showSelectedDays=function(){var t=this;if(this.start||this.end)for(var e=this.datepicker.getElementsByTagName("td"),s=0;s<e.length;s++){var a=parseInt(e[s].getAttribute("time"),10);t.start&&t.end&&t.end>=a&&t.start<=a||t.start&&!t.end&&t.getDateString(t.start,"YYYY-MM-DD")===t.getDateString(a,"YYYY-MM-DD")?t.addClass(e[s],"datepicker__month-day--selected"):t.removeClass(e[s],"datepicker__month-day--selected"),t.start&&t.getDateString(t.start,"YYYY-MM-DD")===t.getDateString(a,"YYYY-MM-DD")?t.addClass(e[s],"datepicker__month-day--first-day-selected"):t.removeClass(e[s],"datepicker__month-day--first-day-selected"),t.end&&t.getDateString(t.end,"YYYY-MM-DD")===t.getDateString(a,"YYYY-MM-DD")?t.addClass(e[s],"datepicker__month-day--last-day-selected"):t.removeClass(e[s],"datepicker__month-day--last-day-selected")}},a.prototype.showSelectedInfo=function(){var t,e,s,a,i,n,o,r,h;this.showTopbar?(e=(t=this.datepicker.getElementsByClassName("datepicker__info--selected")[0]).getElementsByClassName("datepicker__info-text--start-day")[0],s=t.getElementsByClassName("datepicker__info-text--end-day")[0],a=t.getElementsByClassName("datepicker__info-text--selected-days")[0],i=document.getElementById(this.getCloseButtonId()),e.textContent="...",s.textContent="...",a.style.display="none",this.start&&(t.style.display="",e.textContent=this.getDateString(new Date(parseInt(this.start,10)),this.infoFormat)),this.end&&(s.textContent=this.getDateString(new Date(parseInt(this.end,10)),this.infoFormat)),this.start&&this.end?(o=1==(n=this.countDays(this.end,this.start)-1)?n+" "+this.lang("night"):n+" "+this.lang("nights"),r=this.getDateString(new Date(this.start))+this.separator+this.getDateString(new Date(this.end)),a.style.display="",a.firstElementChild.textContent=o,i.disabled=!1,this.setValue(r,this.getDateString(new Date(this.start)),this.getDateString(new Date(this.end))),this.changed=!0):i.disabled=!0):this.start&&this.end&&(h=this.getDateString(new Date(this.start))+this.separator+this.getDateString(new Date(this.end)),this.setValue(h,this.getDateString(new Date(this.start)),this.getDateString(new Date(this.end))),this.changed=!0)},a.prototype.dayClicked=function(t){if(!this.hasClass(t,"datepicker__month-day--invalid")){var e=this.start&&this.end||!this.start&&!this.end;if(e){if(this.hasClass(t,"datepicker__month-day--no-checkin"))return}else if(this.start&&this.hasClass(t,"datepicker__month-day--no-checkout"))return;var s,a=parseInt(t.getAttribute("time"),10);this.addClass(t,"datepicker__month-day--selected"),e?(this.start=a,this.end=!1):this.start&&(this.end=a),this.start&&this.end&&this.start>this.end&&(s=this.end,this.end=this.start,this.start=s),this.start=parseInt(this.start,10),this.end=parseInt(this.end,10),this.clearHovering(),this.start&&!this.end&&this.dayHovering(t),this.updateSelectableRange(),this.checkSelection(),this.showSelectedInfo(),this.showSelectedDays(),this.autoclose(),this.onDayClick&&this.onDayClick(),this.end&&this.onSelectRange&&this.onSelectRange()}},a.prototype.isValidDate=function(t){if(t=parseInt(t,10),this.startDate&&this.compareDay(t,this.startDate)<0||this.endDate&&0<this.compareDay(t,this.endDate))return!1;if(this.start&&!this.end){if(0<this.maxDays&&this.countDays(t,this.start)>this.maxDays||0<this.minDays&&1<this.countDays(t,this.start)&&this.countDays(t,this.start)<this.minDays)return!1;if(this.selectForward&&t<this.start)return!1;if(0<this.disabledDates.length){var e=this.getClosestDates(new Date(parseInt(this.start,10)));if(e[0]&&this.compareDay(t,e[0])<=0)return!1;if(e[1]&&0<=this.compareDay(t,e[1]))return!1}}return!0},a.prototype.checkSelection=function(){var t=this,e=this.countDays(this.end,this.start),s=!!this.showTopbar&&this.datepicker.getElementsByClassName("datepicker__info--feedback")[0];if(this.maxDays&&e>this.maxDays){this.start=!1,this.end=!1;for(var a,i=this.datepicker.getElementsByTagName("td"),n=0;n<i.length;n++)t.removeClass(i[n],"datepicker__month-day--selected"),t.removeClass(i[n],"datepicker__month-day--first-day-selected"),t.removeClass(i[n],"datepicker__month-day--last-day-selected");this.showTopbar&&(a=this.maxDays-1,this.topBarErrorText(s,"error-more",a))}else if(this.minDays&&e<this.minDays){this.start=!1,this.end=!1;for(var o,r=this.datepicker.getElementsByTagName("td"),h=0;h<r.length;h++)t.removeClass(r[h],"datepicker__month-day--selected"),t.removeClass(r[h],"datepicker__month-day--first-day-selected"),t.removeClass(r[h],"datepicker__month-day--last-day-selected");this.showTopbar&&(o=this.minDays-1,this.topBarErrorText(s,"error-less",o))}else this.start||this.end?this.showTopbar&&(this.removeClass(s,"datepicker__info--error"),this.removeClass(s,"datepicker__info--help")):this.showTopbar&&(this.removeClass(s,"datepicker__info--error"),this.addClass(s,"datepicker__info--help"))},a.prototype.addDays=function(t,e){var s=new Date(t);return s.setDate(s.getDate()+e),s},a.prototype.countDays=function(t,e){return Math.abs(this.daysFrom1970(t)-this.daysFrom1970(e))+1},a.prototype.compareDay=function(t,e){var s=parseInt(this.getDateString(t,"YYYYMMDD"),10)-parseInt(this.getDateString(e,"YYYYMMDD"),10);return 0<s?1:0==s?0:-1},a.prototype.compareMonth=function(t,e){var s=parseInt(this.getDateString(t,"YYYYMM"),10)-parseInt(this.getDateString(e,"YYYYMM"),10);return 0<s?1:0==s?0:-1},a.prototype.daysFrom1970=function(t){return Math.floor(this.toLocalTimestamp(t)/864e5)},a.prototype.toLocalTimestamp=function(t){return"object"==typeof t&&t.getTime&&(t=t.getTime()),"string"!=typeof t||t.match(/\d{13}/)||(t=this.parseDate(t).getTime()),t=parseInt(t,10)-60*(new Date).getTimezoneOffset()*1e3},a.prototype.printAttributes=function(t){var e=t,s="";for(var a in t)Object.prototype.hasOwnProperty.call(e,a)&&(s+=a+'="'+e[a]+'" ');return s},a.prototype.goToNextMonth=function(t){var e=t.target.getAttribute("month"),s=1<e,a=s?this.month2:this.month1,a=this.getNextMonth(a);!this.isSingleMonth()&&!s&&0<=this.compareMonth(a,this.month2)||this.isMonthOutOfRange(a)||(this.moveBothMonths&&s&&this.showMonth(this.month2,1),this.showMonth(a,e),this.showSelectedDays(),this.disableNextPrevButtons())},a.prototype.goToPreviousMonth=function(t){var e=t.target.getAttribute("month"),s=1<e,a=s?this.month2:this.month1,a=this.getPrevMonth(a);s&&this.compareMonth(a,this.month1)<=0||this.isMonthOutOfRange(a)||(this.moveBothMonths&&!s&&this.showMonth(this.month1,2),this.showMonth(a,e),this.showSelectedDays(),this.disableNextPrevButtons())},a.prototype.isSingleMonth=function(){return!this.isVisible(this.getMonthDom(2))},a.prototype.isMonthOutOfRange=function(t){var e=new Date(t.valueOf());return!!(this.startDate&&new Date(e.getFullYear(),e.getMonth()+1,0,23,59,59)<this.startDate||this.endDate&&new Date(e.getFullYear(),e.getMonth(),1)>this.endDate)},a.prototype.disableNextPrevButtons=function(){var t,e,s,a,i;this.isSingleMonth()||(t=parseInt(this.getDateString(this.month1,"YYYYMM"),10),e=parseInt(this.getDateString(this.month2,"YYYYMM"),10),s=Math.abs(t-e),a=this.datepicker.getElementsByClassName("datepicker__month-button--next"),i=this.datepicker.getElementsByClassName("datepicker__month-button--prev"),1<s&&89!==s?(this.removeClass(a[0],"datepicker__month-button--disabled"),this.removeClass(i[1],"datepicker__month-button--disabled")):(this.addClass(a[0],"datepicker__month-button--disabled"),this.addClass(i[1],"datepicker__month-button--disabled")),this.isMonthOutOfRange(this.getPrevMonth(this.month1))?this.addClass(i[0],"datepicker__month-button--disabled"):this.removeClass(i[0],"datepicker__month-button--disabled"),this.isMonthOutOfRange(this.getNextMonth(this.month2))?this.addClass(a[1],"datepicker__month-button--disabled"):this.removeClass(a[1],"datepicker__month-button--disabled"))},a.prototype.topBarDefaultText=function(){var t,e;this.showTopbar&&(t="",t=this.minDays&&this.maxDays?this.lang("info-range"):this.minDays&&2<this.minDays?this.lang("info-more-plural"):this.minDays?this.lang("info-more"):this.lang("info-default"),e=this.datepicker.getElementsByClassName("datepicker__info--feedback")[0],t=t.replace(/%d/,this.minDays-1).replace(/%d/,this.maxDays-1),this.addClass(e,"datepicker__info--help"),this.removeClass(e,"datepicker__info--error"),e.textContent=t)},a.prototype.topBarErrorText=function(t,e,s){this.showTopbar&&(this.addClass(t,"datepicker__info--error"),this.removeClass(t,"datepicker__info--help"),1<s?(e=(e=this.lang(e+"-plural")).replace("%d",s),t.textContent=e):e=this.lang(e),this.datepicker.getElementsByClassName("datepicker__info--selected")[0].style.display="none")},a.prototype.updateSelectableRange=function(){for(var t,e=this,s=this.datepicker.getElementsByTagName("td"),a=this.start&&!this.end,i=0;i<s.length;i++){e.hasClass(s[i],"datepicker__month-day--invalid")&&e.hasClass(s[i],"datepicker__month-day--tmp")&&(e.removeClass(s[i],"datepicker__month-day--tmp"),e.hasClass(s[i],"datepicker__month-day--tmpinvalid")?e.removeClass(s[i],"datepicker__month-day--tmpinvalid"):(e.removeClass(s[i],"datepicker__month-day--invalid"),e.addClass(s[i],"datepicker__month-day--valid"))),a?e.hasClass(s[i],"datepicker__month-day--visibleMonth")&&(e.hasClass(s[i],"datepicker__month-day--valid")||e.hasClass(s[i],"datepicker__month-day--disabled")||e.hasClass(s[i],"datepicker__month-day--before-disabled-date"))&&(t=parseInt(s[i].getAttribute("time"),10),e.isValidDate(t)?(e.addClass(s[i],"datepicker__month-day--valid"),e.addClass(s[i],"datepicker__month-day--tmp"),e.removeClass(s[i],"datepicker__month-day--invalid"),e.removeClass(s[i],"datepicker__month-day--disabled")):(e.hasClass(s[i],"datepicker__month-day--invalid")&&e.addClass(s[i],"datepicker__month-day--tmpinvalid"),e.addClass(s[i],"datepicker__month-day--invalid"),e.addClass(s[i],"datepicker__month-day--tmp"),e.removeClass(s[i],"datepicker__month-day--valid"))):(e.hasClass(s[i],"datepicker__month-day--checkout-enabled")||e.hasClass(s[i],"datepicker__month-day--before-disabled-date"))&&(e.addClass(s[i],"datepicker__month-day--invalid"),e.removeClass(s[i],"datepicker__month-day--valid"),e.hasClass(s[i],"datepicker__month-day--before-disabled-date")||e.addClass(s[i],"datepicker__month-day--disabled"))}return!0},a.prototype.dayHovering=function(t){var e,s,a,i,n,o,r,h=this,d=parseInt(t.getAttribute("time"),10),l="";if(!this.hasClass(t,"datepicker__month-day--invalid")){for(var c,p=this.datepicker.getElementsByTagName("td"),m=0;m<p.length;m++){var g=parseInt(p[m].getAttribute("time"),10);g===d?h.addClass(p[m],"datepicker__month-day--hovering"):h.removeClass(p[m],"datepicker__month-day--hovering"),h.start&&!h.end&&(h.start<g&&g<=d||h.start>g&&d<=g)?h.addClass(p[m],"datepicker__month-day--hovering"):h.removeClass(p[m],"datepicker__month-day--hovering")}this.start&&!this.end&&(c=this.countDays(d,this.start)-1,this.hoveringTooltip&&("function"==typeof this.hoveringTooltip?l=this.hoveringTooltip(c,this.start,d):!0===this.hoveringTooltip&&0<c&&(l=c+" "+(1==c?this.lang("night"):this.lang("nights")))))}l?(e=t.getBoundingClientRect(),s=this.datepicker.getBoundingClientRect(),a=e.left-s.left,i=e.top-s.top,a+=e.width/2,(n=document.getElementById(this.getTooltipId())).style.display="",n.textContent=l,o=n.getBoundingClientRect().width,r=n.getBoundingClientRect().height,a-=o/2,i-=r,setTimeout(function(){n.style.left=a+"px",n.style.top=i+"px"},10)):document.getElementById(this.getTooltipId()).style.display="none"},a.prototype.clearHovering=function(){for(var t=this.datepicker.getElementsByTagName("td"),e=0;e<t.length;e++)this.removeClass(t[e],"datepicker__month-day--hovering");document.getElementById(this.getTooltipId()).style.display="none"},a.prototype.clearSelection=function(){this.start=!1,this.end=!1;for(var t=this.datepicker.getElementsByTagName("td"),e=0;e<t.length;e++)this.removeClass(t[e],"datepicker__month-day--selected"),this.removeClass(t[e],"datepicker__month-day--first-day-selected"),this.removeClass(t[e],"datepicker__month-day--last-day-selected");this.setValue(""),this.checkSelection(),this.showSelectedInfo(),this.showSelectedDays()},a.prototype.parseDisabledDates=function(){var t=[];this.setFechaI18n();for(var e=0;e<this.disabledDates.length;e++)t[e]=fecha.parse(this.disabledDates[e],"YYYY-MM-DD");t.sort(function(t,e){return t-e}),this.disabledDatesTime=t},a.prototype.getClosestDates=function(t){var e=[!1,!1];if(t<this.disabledDatesTime[0])e=this.enableCheckout?[!1,this.addDays(this.disabledDatesTime[0],1)]:[!1,this.disabledDatesTime[0]];else if(t>this.disabledDatesTime[this.disabledDatesTime.length-1])e=[this.disabledDatesTime[this.disabledDatesTime.length-1],!1];else{for(var s=this.disabledDatesTime.length,a=this.disabledDatesTime.length,i=Math.abs(new Date(0,0,0).valueOf()),n=i,o=-i,r=0,h=0;h<this.disabledDatesTime.length;++h)(r=t-this.disabledDatesTime[h])<0&&o<r&&(a=h,o=r),0<r&&r<n&&(s=h,n=r);this.disabledDatesTime[s]&&(e[0]=this.disabledDatesTime[s]),void 0===this.disabledDatesTime[s]?e[1]=!1:this.enableCheckout?e[1]=this.addDays(this.disabledDatesTime[a],1):e[1]=this.disabledDatesTime[a]}return e},a.prototype.lang=function(t){return t in this.i18n?this.i18n[t]:""},a.prototype.emptyElement=function(t){for(;t.firstChild;)t.removeChild(t.firstChild)},a.prototype.classRegex=function(t){return new RegExp("(^|\\s+)"+t+"(\\s+|$)")},a.prototype.hasClass=function(t,e){return this.classRegex(e).test(t.className)},a.prototype.addClass=function(t,e){this.hasClass(t,e)||(t.className=t.className+" "+e)},a.prototype.removeClass=function(t,e){t.className=t.className.replace(this.classRegex(e)," ")},a.prototype.isVisible=function(t){return t.offsetWidth||t.offsetHeight||t.getClientRects().length},a.prototype.slideDown=function(t,e){t.style.display="";var s=t.getBoundingClientRect().height;t.style.height=0,this.recalc(t.offsetHeight),t.style.transition="height "+e,t.style.height=s+"px",t.addEventListener("transitionend",function(){t.style.height=t.style.transition=t.style.display=""})},a.prototype.slideUp=function(t,e){var s=t.getBoundingClientRect().height;t.style.height=s+"px",this.recalc(t.offsetHeight),t.style.transition="height "+e,t.style.height=0,t.addEventListener("transitionend",function(){t.style.display="none"})},a.prototype.recalc=function(t){return t.offsetHeight},a.prototype.isTouchDevice=function(){return"ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch},a.prototype.open=function(){this.openDatepicker()},a.prototype.close=function(){this.closeDatepicker()},a.prototype.getDatePicker=function(){return this.datepicker},a.prototype.setRange=function(t,e){"string"==typeof t&&"string"==typeof e&&(t=this.parseDate(t),e=this.parseDate(e)),this.setDateRange(t,e)},a.prototype.clear=function(){this.clearSelection()},a.prototype.getNights=function(){var t,e,s,a=0;return this.start&&this.end?a=this.countDays(this.end,this.start)-1:(e=(t=this.getValue())?t.split(this.separator):"")&&2<=e.length&&(s=this.format,a=this.countDays(this.parseDate(e[0],s),this.parseDate(e[1],s))-1),a},a.prototype.destroy=function(){document.getElementById(this.getDatepickerId())&&(this.removeAllBoundedListeners(this.input,"click"),this.removeAllBoundedListeners(document,"click"),this.removeAllBoundedListeners(this.input,"change"),this.datepicker.parentNode.removeChild(this.datepicker))},a}();
</script>

<script type="text/javascript">
    (function() {

			var input = document.getElementById('input');
			var demo3 = new HotelDatepicker(document.getElementById('input'), {
				format: 'DD-MM-YYYY'
			});


		
		})();
</script>

     
         <!-- All JS Custom Plugins Link Here here -->
         <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
         
         <!-- Jquery, Popper, Bootstrap -->
         <script type="text/javascript" src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
         <!-- Jquery Mobile Menu -->
         <script type="text/javascript" src="{{asset('js/jquery.slicknav.min.js')}}"></script>
 
         <!-- Jquery Slick , Owl-Carousel Plugins -->
         <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
         <!-- Date Picker -->
         <script type="text/javascript" src="{{asset('js/gijgo.min.js')}}"></script>
         <!-- One Page, Animated-HeadLin -->
         <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/animated.headline.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
 
         <!-- Scrollup, nice-select, sticky -->
         <script type="text/javascript" src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.nice-select.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>
         
         <!-- contact js -->
         <script type="text/javascript" src="{{asset('js/contact.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.form.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/mail-script.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
         
         <!-- Jquery Plugins, main Jquery -->	
         <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection