var api = require('../../utils/api.js')
var app = getApp()
Page({
  data: {
    systemInfo: {},
    _api: {},
    imgList: [
      {
        img:'/image/discover/image_artist@2x.png',
        id:'actionlist'
      },
      {
        img: '/image/discover/dailySelection@2x.png',
        id: 'actionlist'
      },
      {
        img: '/image/discover/image_fans@2x.png',
        id: 'bu'
      }
    ],
    imgListTwo: [
      [
        '/image/discover/image_preson@2x.png',
        '/image/discover/image_read@2x.png'
      ]
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
