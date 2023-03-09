import React from 'react';
import ReactDOM from 'react-dom/client';
import MediacionApp from './src/test';

function Example() {
    return (
        <MediacionApp />
    );
}

export default Example;

if (document.getElementById('root')) {
    const Index = ReactDOM.createRoot(document.getElementById("root"));

    Index.render(
        <React.StrictMode>
            <Example />
        </React.StrictMode>
    )
}
