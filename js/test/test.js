  // https://mochajs.org/

  // assert example
  var assert = require('assert');
  describe('Array', function() {
    describe('#indexOf()', function() {
      it('should return -1 when the value is not present', function() {
        assert.equal([1, 2, 3].indexOf(4), -1);
      });
    });
  });

   // async example
   const https = require('https');
   describe('sample tests:', function() {
     it('callback', function(done) {
       https.get('https://www.example.com', function(res) {
         assert.equal(200, res.statusCode);
         done();
       });
     });
   });


  // sync code - no callback
  describe('Array', function() {
    describe('#indexOf()', function() {
      it('should return -1 when the value is not present', function() {
        assert.equal([1, 2, 3].indexOf(5), -1);
        assert.equal([1, 2, 3].indexOf(0), -1);
      });
    });
  });
