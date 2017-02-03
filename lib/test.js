// import React from 'react';
// import ReactDOM from 'react-dom';

const App = () => {
	return React.createElement(
		'div',
		null,
		'Hello!'
	);
};

ReactDOM.render(React.createElement(App, null), document.getElementById('root'));