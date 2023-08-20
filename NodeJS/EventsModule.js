var events=require('events');

var eventEmitter=new events.EventEmitter();

var listener=function myFunc()
{
	console.log("HI THERE! HAPPY LEARNING");
}

eventEmitter.addListener('MyEvent', listener);

eventEmitter.emit('MyEvent');






