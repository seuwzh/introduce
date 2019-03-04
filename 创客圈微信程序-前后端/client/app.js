//app.js
var qcloud = require('./vendor/wafer2-client-sdk/index');
var config = require('./config');
var API = require('./utils/api.js');

App({
    API,

    onLaunch: function () {
      qcloud.setLoginUrl(config.service.loginUrl)
    },

    getSystemInfo: function (cb) {
    var that = this
    if (that.globalData.systemInfo) {
      typeof cb == "function" && cb(that.globalData.systemInfo)
    } else {
      wx.getSystemInfo({
        success: function (res) {
          that.globalData.systemInfo = res
          typeof cb == "function" && cb(that.globalData.systemInfo)
        }
      })
    }
  },

  globalData: {
    systemInfo: null
  }
})