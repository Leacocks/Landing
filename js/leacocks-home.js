(function() {
    //
    // Fills a string containing special templating syntax with the data provided.
    //
    // Ex:
    //    tmpl = "${name} got a ${grade} in ${course}.";
    //    data = { name: "John", grade: "B", course: "Plant Pathology" };
    //    tmpl.template(data); // outputs "John got a B in Plant Pathology."
    //
    String.prototype.template = function(data){
        var regex = null, completed = this.toString();
        for(el in data){
            regex = new RegExp('\\${'+ el +'}', 'g');
            completed = completed.replace(regex, data[el]);
        }
        return completed.toString();
    };

    moment.lang('short', {
        months : "January_February_March_April_May_June_July_August_September_October_November_December".split("_"),
        monthsShort : "Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_"),
        weekdays : "Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),
        weekdaysShort : "Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_"),
        longDateFormat : {
            LT : "h:mm A",
            L : "MM/DD/YYYY",
            LL : "MMMM D YYYY",
            LLL : "MMMM D YYYY LT",
            LLLL : "dddd, MMMM D YYYY LT"
        },
        meridiem : false,
        calendar : {
            sameDay : '[Today at] LT',
            nextDay : '[Tomorrow at] LT',
            nextWeek : 'dddd [at] LT',
            lastDay : '[Yesterday at] LT',
            lastWeek : '[last] dddd [at] LT',
            sameElse : 'L'
        },
        relativeTime : {
            future : "in %s",
            past : "%s ago",
            s : "a few seconds",
            m : "a minute",
            mm : "%dm",
            h : "an hour",
            hh : "%dhr",
            d : "a day",
            dd : "%dd",
            M : "a month",
            MM : "%dmo",
            y : "a year",
            yy : "%dy"
        },
        ordinal : function (number) {
            var b = number % 10;
            return (~~ (number % 100 / 10) === 1) ? 'th' :
                (b === 1) ? 'st' :
                (b === 2) ? 'nd' :
                (b === 3) ? 'rd' : 'th';
        }
    });

    //
    // Create global Leacocks object.
    //
    if (typeof Leacocks === "undefined" || Leacocks === null) {
        Leacocks = {};
    }
    window.Leacocks = Leacocks;

    //
    // Convenience function for cross-browser parsing
    //
    Leacocks.parseDate = function(dateString, format){
        var parsedDate = dateString;

        // Check to make sure format was specified.
        if(typeof format === "undefined"){
            format = "YYYY-MM-DD HH:mm:ss";
        }

        if(typeof moment !== "undefined"){
            var d = new Date(dateString);
            if(Object.prototype.toString.call(d) === "[object Date]"){
                if(isNaN(d.getTime())){
                    // invalid date
                    parsedDate = moment(dateString).format(format);
                }else{
                    // valid date, parse
                    parsedDate = moment(d).format(format);
                }
            }
        }
        if(/12:00 AM/.test(parsedDate) || /12:00AM/.test(parsedDate)){
            parsedDate = parsedDate.replace("12:00 AM", "All Day").replace("12:00AM", "All Day");
        }
        return parsedDate;
    }
    
    //
    // Helper method for turning URLs into anchor tags
    //
    Leacocks.linkify = function(val){
        var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
        return val.replace(exp, "<a target='_blank' href='$1'>$1</a>").replace(/(^|\s)(@\w+)/gm, '$1<a href="http://twitter.com/$2" target="_blank">$2</a>');
    };

    Leacocks.Home = function(){
        this.twitterContainerSelector = "#twitter-feed";
        this.twitterTmpl = "${text}<br><a href=\"${link}\" target=\"_blank\">${pubDate}</a>";
        this.loadTwitterFeed = function(){
            var home = this;
            return $.get("/home/feed-cache-twitter.php", function(data){
                var $xml = $(data);
                $tweet = $xml.find("item").each(function(i){
                   var $this = $(this); 
                   tweet = {
                       text: Leacocks.linkify($this.find("title").text()).replace("Leacocks:", "@leacocks:"),
                       link: $this.find("guid").text(),
                       pubDate: $this.find("pubDate").text()
                   };
                   if(typeof moment !== "undefined"){
                       tweet.pubDate = moment(new Date(tweet.pubDate)).fromNow();
                   }
                   $(home.twitterContainerSelector).html(home.twitterTmpl.template(tweet));
                });
            }, "xml");
        }
    }

    $(function(){
       var home = new Leacocks.Home();
       home.loadTwitterFeed();
    });
}).call(this);