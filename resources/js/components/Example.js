import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class Example extends Component {

    constructor() {
        super();

        this.state = {
            posts: []
        };
    }
    componentDidMount() {
        axios
            .get('/api/posts')
            .then(response => {
                this.setState({posts: response.data});
            })
            .catch(() => {
                console.log('通信に失敗しました');
            });
    }

    renderPosts() {
        return this.state.posts.map(post => {
            return (
                <li key={post.key}>
                    {post.name}: {post.content}
                </li>
            );
        });
    }

    render() {
        return (
            <div className="container">
                <ul>
                    {this.renderPosts()}
                </ul>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
