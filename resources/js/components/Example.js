import React, { useState } from "react";
import ReactDOM from "react-dom";

function Example() {
    const [isShown, setIsShown] = useState(false);
    return (
        <div>
            {isShown && <p>greatt</p>}

            <button onClick={() => setIsShown(!isShown)}>
                {isShown ? "hide" : "show"}
            </button>
        </div>
    );
}

export default Example;

if (document.getElementById("example")) {
    ReactDOM.render(<Example />, document.getElementById("example"));
}
