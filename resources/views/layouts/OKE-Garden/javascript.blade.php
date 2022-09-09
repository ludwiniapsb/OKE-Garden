<script>
function CalendarApp(date) {
  
  if (!(date instanceof Date)) {
    date = new Date();
  }
  
  this.days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  this.months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'Setember', 'October', 'Novmber', 'December'];
  this.aptDates = [new Date(2016, 4, 30).toString(),new Date(2016, 4, 1).toString()];
  this.eles = {
  };
  
  this.calendar = document.getElementById("calendar-app");
  
  this.calendarView = document.getElementById("dates");
  
  this.calendarMonthDiv = document.getElementById("calendar-month");
  this.calendarMonthLastDiv = document.getElementById("calendar-month-last");
  this.calendarMonthNextDiv = document.getElementById("calendar-month-next");
  this.dayViewDateEle = document.getElementById("day-view-date");

  
  /* Start the app */
  this.showView(date);
  this.addEventListeners(); 
}

CalendarApp.prototype.addEventListeners = function(){
  
  this.calendarMonthLastDiv.addEventListener("click", this.showNewMonth.bind(this));
  this.calendarMonthNextDiv.addEventListener("click", this.showNewMonth.bind(this));
  this.dayViewDateEle.addEventListener("click", this.showNewMonth.bind(this));

};
CalendarApp.prototype.showView = function(date){
  if ( !date || (!(date instanceof Date)) ) date = new Date();
  var now = new Date(date),
      y = now.getFullYear(),
      m = now.getMonth();
  var today = new Date();
  
  var lastDayOfM = new Date(y, m + 1, 0).getDate();
  var startingD = new Date(y, m, 1).getDay();
  var lastM = new Date(y, now.getMonth()-1, 1);
  var nextM = new Date(y, now.getMonth()+1, 1);
 
  
  while(this.calendarView.firstChild) {
    this.calendarView.removeChild(this.calendarView.firstChild);
  }
  
  // build up spacers
  for ( var x = 0; x < startingD; x++ ) {
    var spacer = document.createElement("div");
    spacer.className = "cview--spacer";
    this.calendarView.appendChild(spacer);
  }
  
  for ( var z = 1; z <= lastDayOfM; z++ ) {
   
    var _date = new Date(y, m ,z);
    var day = document.createElement("div");
    day.className = "cview--date";
    day.textContent = z;
    day.setAttribute("data-date", _date);
    day.onclick = this.showDay.bind(this);
    
    this.calendarView.appendChild(day);
  }
   
  
  this.calendarMonthDiv.textContent = this.months[now.getMonth()] + " " + now.getFullYear();
  this.calendarMonthDiv.setAttribute("data-date", now);

  
  this.calendarMonthLastDiv.textContent = "<";
  this.calendarMonthLastDiv.setAttribute("data-date", lastM);
  
  this.calendarMonthNextDiv.textContent = " >";
  this.calendarMonthNextDiv.setAttribute("data-date", nextM);
  
}
CalendarApp.prototype.showDay = function(e, dayEle) {
  e.stopPropagation();
  if ( !dayEle ) {
    dayEle = e.currentTarget;
  }
  var dayDate = new Date(dayEle.getAttribute('data-date'));
  
  this.calDaySelected = dayEle;
  
  this.openDayWindow(dayDate);
  
};

CalendarApp.prototype.openDayWindow = function(date){
  
  var now = new Date();
  var day = new Date(date);
  this.dayViewDateEle.textContent = this.days[day.getDay()] + ", " + this.months[day.getMonth()] + " " + day.getDate() + " " + day.getFullYear();
  this.dayViewDateEle.setAttribute('data-date', day);
};



CalendarApp.prototype.textOptionLimiter = function(options, input, format){
  if ( !input ) return '';
  
  if ( input.indexOf(":") !== -1 && format == 'datetime' ) {
 
    var _splitTime = input.split(':', 2);
    if (_splitTime.length == 2 && !_splitTime[1].trim()) return input;
    var _trailingTime = parseInt(_splitTime[1]);
  
    if (options.indexOf(_splitTime[0]) === -1) {
      return options[0];
    }
    else if (_splitTime[1] == "0" ) {
      return input;
    }
    else if (_splitTime[1] == "00" ) {
      return _splitTime[0] +  ":00";
    }
    else if (_trailingTime < 10 ) {
      return _splitTime[0] + ":" + "0" + _trailingTime;
    }
    else if ( !Number.isInteger(_trailingTime) || _trailingTime < 0 || _trailingTime > 59 )  {
      return _splitTime[0];
    } 
    return _splitTime[0] + ":" + _trailingTime;
  }
  if ((input.toString().length >= 3) ) {
    var pad = (input.toString().length - 4) * -1;
    var _hour, _min;
    if (pad == 1) {
      _hour = input[0];
      _min = input[1] + input[2];
    } else {
      _hour = input[0] + input[1];
      _min = input[2] + input[3];
    }
    
    _hour = Math.max(1,Math.min(12,(_hour)));
    _min = Math.min(59,(_min));
    if ( _min < 10 ) { 
      _min = "0" + _min;
    }
    _min = (isNaN(_min)) ? '00' : _min;
    _hour = (isNaN(_hour)) ? '9' : _hour ;

    return _hour + ":" + _min;
    
  }

  if (options.indexOf(input) === -1) {
    return options[0];
  }
  
  return input;
};

CalendarApp.prototype.showNewMonth = function(e){
  var date = e.currentTarget.dataset.date;
  var newMonthDate = new Date(date);
  this.showView(newMonthDate);
  return true;
};

var calendar = new CalendarApp();
console.log(calendar);

</script>