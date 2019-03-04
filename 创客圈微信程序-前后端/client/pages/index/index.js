// pages/index/index.js
var app = getApp();
var INFO = wx.getSystemInfoSync();

Page({

  /**
   * 页面的初始数据
   */
  data: {
    LOADING: true,
    imgurls:[
      'https://www.seuclab.cn/public/cs1.jpg',
      'https://www.seuclab.cn/public/cs2.png',
    ],
    imgUrls: [
      'https://www.seuclab.cn/public/banner.png',
      'https://www.seuclab.cn/public/banner2.jpg',
      'https://www.seuclab.cn/public/banner3.jpg'
    ],
    indicatorDots: true,
    autoplay: true,
    interval: 5000,
    duration: 1000,
    hotList: [
      {
        pic: "https://www.seuclab.cn/public/lly.jpg",
        title: "为吹过的牛逼奋斗终身",
        name: "安伟亮",
        fee: "2016",
      },
      {
        pic: "https://www.seuclab.cn/public/fhz.jpg",
        title: "巴拉巴拉巴拉巴拉",
        name: "冯海钊",
        fee: "2016",
      },
      {
        pic: "https://www.seuclab.cn/public/shr.jpg",
        title: "做有意思的人呢，做有温度的事",
        area: "申池冉",
        day: "1day",
        avatar: "http://img.qq745.com/uploads/allimg/170413/14-1F413113106-53.png",
        name: "申池冉",
        fee: "2016",
        experience: '10年以上'
      },
      {
        pic: "https://www.seuclab.cn/public/fhz.jpg",
        title: "恋上彩虹的梦",
        area: "三亚",
        day: "1day",
        avatar: "http://img.qq745.com/uploads/allimg/170413/14-1F413113108-52.png",
        name: "肖若愚",
        fee: "2015",
        experience: '10年'
      },
      {
        pic: "https://www.seuclab.cn/public/lly.jpg",
        title: "日暮三亚",
        area: "三亚",
        day: "1day",
        avatar: "http://img.qq745.com/uploads/allimg/170413/14-1F413113109-52.png",
        name: "陈雄辉",
        fee: "2014",
        experience: '7年'
      }
    ],

  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    //this.onPullDownRefresh();
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
    this.onPullDownRefresh();
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
  
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {
  
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
  
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
    var that=this;
    that.setData({
      LOADING: true
    });
    setTimeout(function () {
      that.setData({
        LOADING: false,
      })
    }, 200);
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
  
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {
  
  }
})