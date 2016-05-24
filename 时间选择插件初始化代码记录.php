var currYear = (new Date()).getFullYear();
$('#start_time_input').mobiscroll().calendar({
    theme: 'mobiscroll',      // Specify theme like: theme: 'ios' or omit setting to use default
    lang: 'zh',    // Specify language like: lang: 'pl' or omit setting to use default
    display: 'bottom',  // Specify display mode like: display: 'bottom' or omit setting to use default
    controls: ['calendar'],
    dateFormat: 'yyyy-mm-dd',
    // defaultValue: [ currYear, currYear ],
    startYear: currYear - 1, //开始年份
    endYear: currYear + 10, //结束年份
    showNow: true,
    setText: '确定',
    dayText: '日',
    monthText: '月',
    yearText: '年',
    nowText: "明天",
    cancelText: '',
    mode: 'scroller',         // More info about mode: http://docs.mobiscroll.com/2-17-1/calendar#!opt-mode
});

$('#stop_time_input').mobiscroll().calendar({
    theme: 'mobiscroll',      // Specify theme like: theme: 'ios' or omit setting to use default
    lang: 'zh',    // Specify language like: lang: 'pl' or omit setting to use default
    display: 'bottom',  // Specify display mode like: display: 'bottom' or omit setting to use default
    controls: ['calendar'],
    dateFormat: 'yyyy-mm-dd',
    // defaultValue: [ currYear, currYear ],
    startYear: currYear - 1, //开始年份
    endYear: currYear + 10, //结束年份
    showNow: true,
    setText: '确定',
    dayText: '日',
    monthText: '月',
    yearText: '年',
    nowText: "明天",
    cancelText: '',
    mode: 'scroller',         // More info about mode: http://docs.mobiscroll.com/2-17-1/calendar#!opt-mode
});

$('#stop_time_input').mobiscroll().date({
    theme: 'mobiscroll',
    lang: 'zh',
    display: 'bottom',
    controls: ['calendar', 'time'],
    defaultValue: [ new Date(2013, 6, 12), new Date(2013, 6, 18, 23, 59) ],
    startInput: '#start_time_input',
    endInput: '#stop_time_input'
});


 ?>
