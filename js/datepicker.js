/**
 * Created by Keena on 22/04/15.
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($)
{
$(function() {

    /*
     define a new language named "custom"
     */

    $.dateRangePickerLanguages['custom'] =
    {
        'selected': 'Choosed:',
        'days': 'Days',
        'apply': 'Close',
        'week-1': 'Mon',
        'week-2': 'Tue',
        'week-3': 'Wed',
        'week-4': 'Thu',
        'week-5': 'Fri',
        'week-6': 'Sat',
        'week-7': 'Sun',
        'month-name': ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        'shortcuts': 'Shortcuts',
        'past': 'Past',
        '7days': '7days',
        '14days': '14days',
        '30days': '30days',
        'previous': 'Previous',
        'prev-week': 'Week',
        'prev-month': 'Month',
        'prev-quarter': 'Quarter',
        'prev-year': 'Year',
        'less-than': 'Date range should longer than %d days',
        'more-than': 'Date range should less than %d days',
        'default-more': 'Please select a date range longer than %d days',
        'default-less': 'Please select a date range less than %d days',
        'default-range': 'Please select a date range between %d and %d days',
        'default-default': 'This is costom language'
    };

    $('.date-range-meryl').dateRangePicker({
        language:'en',
        shortcuts: {
            'prev-days': [3, 5, 7],
            'prev': ['week', 'month', 'year'],
            'next-days': null,
            'next': null
        }
    });
});
}));
