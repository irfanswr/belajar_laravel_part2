import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'
import ArticleIndex from './ArticleIndex'
import ArticleCreate from './ArticleCreate'
import ArticleShow from './ArticleShow'
import ArticleEdit from './ArticleEdit'
 
class App extends Component {
    render () {
        return (
            <BrowserRouter>
                <div>
                    <Header />
                    <Switch>
                    <Route exact path='/react' component={ArticleIndex}/>
                    <Route exact path='/react/create' component={ArticleCreate} />
                    <Route path='/react/article/edit/:id' component={ArticleEdit} />
                    <Route path='/react/article/:id' component={ArticleShow} />
                    </Switch>
                </div>
            </BrowserRouter>
        )
    }
}
 
ReactDOM.render(<App />, document.getElementById('app'))