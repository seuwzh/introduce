var api = require('../../utils/api.js')
var app = getApp()
Page({
  data: {
    systemInfo: {},
    _api: {},
    imgList: [
      'https://www.seuclab.cn/public/bu/cf.png',
      'https://www.seuclab.cn/public/bu/zr.png',
      'https://www.seuclab.cn/public/bu/wl.png',
      'https://www.seuclab.cn/public/bu/fxz.png',
    ]
  },

  onLoad: function (options) {
    var that = this
    app.getSystemInfo(function(res) {
      that.setData({
        systemInfo: res
      })
    })

    that.setData({
      _api: api
    })
  },

  onPullDownRefresh () {
    wx.stopPullDownRefresh()
  },
})
